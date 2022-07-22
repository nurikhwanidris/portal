<?php

namespace App\Http\Livewire\Main\Carian;

use App\Models\Post as ModelsPost;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Post extends Component
{
    public $search;

    public function render(Request $request)
    {
        $search = $request->input('carian');

        $posts = ModelsPost::query()
            ->where('title_my', 'LIKE', "%{$search}%")
            ->orWhere('contents_my', 'LIKE', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        if ($posts->count() == 0) {
            $res_halaman_summary = 'Tiada rekod ditemui';
        } else {
            foreach ($posts as $res_halaman) {
                $text = strip_tags($res_halaman['contents_my']);
                $text = trim(str_replace(array("\r", "\n"), ' ', $text));
                $text = preg_replace('!\s+!', ' ', $text);
                $highlight = preg_replace('/(' . $search . ')/i', '<span style="background-color: #FFFF00; color: black;">$1</span>', $text);

                if (stripos($text, $search) < 151) {
                    $text = Str::words($highlight, 30, '...');
                } else {
                    $text = '... ' . preg_replace('/\s+?(\S+)?$/', '', substr($highlight, stripos($text, $search), 300)) . ' ...';
                }

                $res_halaman_summary[$res_halaman['id']] = array(
                    'id' => $res_halaman['id'],
                    'tajuk' => $res_halaman['title_my'],
                    'contents_my' => $text,
                    'type' => $res_halaman['type'],
                    'created_at' => $res_halaman['created_at'],
                );
            }
        }


        return view('livewire.main.carian.post', [
            'search' => $search,
            'data' => $posts,
            'posts' => $res_halaman_summary,
        ]);
    }
}

<?php

namespace App\Http\Livewire\Main\Carian;

use App\Models\Pengumuman as ModelsPengumuman;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class Pengumuman extends Component
{
    public $search;

    public function render(Request $request)
    {
        $search = $request->input('carian');

        $pengumuman = ModelsPengumuman::query()
                ->where('title_my', 'LIKE', "%{$search}%")
                ->orWhere('content_my', 'LIKE', "%{$search}%")
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        foreach ($pengumuman as $res_halaman) {
            $text = strip_tags($res_halaman['content_my']);
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
                'content_my' => $text,
                'type' => $res_halaman['type'],
                'created_at' => $res_halaman['created_at'],
            );
        }

        return view('livewire.main.carian.pengumuman', [
            'search' => $search,
            'data' => $pengumuman,
            'pengumuman' => $res_halaman_summary,
        ]);
    }
}

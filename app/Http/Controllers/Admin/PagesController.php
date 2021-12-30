<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.page.index', [
            'link' => '',
            'leadCrumbs' => '',
            'title' => 'List of Pages',
            // 'text' => 'This is just a test page for now',
            'pages' => Page::with('user')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.page.create', [
            'link' => '/spsm/admin/page',
            'leadCrumbs' => 'Halaman',
            'title' => 'Cipta Halaman Baru',
            'text' => 'This is just a test page for now',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title_my' => 'required|max:100',
            'title_en' => 'required|max:100',
            'slug_en' => 'required|unique:pages',
            'slug_my' => 'required|unique:pages',
            'content_my' => 'required',
            'content_en' => 'required',
            'status' => 'required',
            'type' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Page::create($validateData);

        return redirect('/spsm/admin/page/create')->with('success', 'Satu halaman baru berjaya ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '-' . time() . '.' . $extension;

            //Upload File
            $request->file('upload')->storeAs('public/upload/img', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/upload/img/' . $filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }


    // Check for used slugs
    public function checkSlugMy(Request $request)
    {
        // Check for MY slug
        $slug_my = SlugService::createSlug(Page::class, 'slug_my', $request->title_my);
        return response()->json(['slug_my' => $slug_my]);
    }

    public function checkSlugEn(Request $request)
    {
        // Check for EN slug
        $slug_en = SlugService::createSlug(Page::class, 'slug_en', $request->title_en);
        return response()->json(['slug_en' => $slug_en]);
    }

    public function getPageMy($slug_my)
    {
        $page = Page::where('slug_my', $slug_my)->first();

        return view('spsm.layouts.page.index', [
            'title' => $page->title_my,
            'body' => $page->content_my,
            'lastModified' => 'Kemaskini terakhir : ' . $page->updated_at,
        ]);
    }

    public function getPageEn($slug_en)
    {
        $page = Page::where('slug_en', $slug_en)->first();

        return view('spsm.layouts.page.index', [
            'title' => $page->title_en,
            'body' => $page->content_en,
            'lastModified' => 'Last modified : ' . $page->updated_at,
        ]);
    }
}

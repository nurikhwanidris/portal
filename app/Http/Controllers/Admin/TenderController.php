<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use App\Models\Status;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.tender.index', [
            'title' => 'Senarai Tender',
            'leadCrumbs' => 'Tender',
            'link' => '/spsm/admin/tender',
            'tenders' => Tender::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.tender.create', [
            'title' => 'Cipta Tender',
            'leadCrumbs' => 'Tender',
            'link' => '/spsm/admin/tender',
            'statuses' => Status::all(),
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
            'title_my' => 'required',
            'title_en' => 'required',
            'tempoh' => 'required',
            'show' => 'required',
            'hide' => 'required',
            'status_id' => 'required'
        ]);

        // Get filename with extension
        $filenamewithextension = $request->file('filename')->getClientOriginalName();

        // Filter out the extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        // Filter out the filename
        $extension = $request->file('filename')->getClientOriginalExtension();

        // Remove all white spaces
        $filenametostore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $extension;

        // Store with filename
        $request->file('filename')->storeAs('public/upload/doc', $filenametostore);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['kod'] = $request['kod'];
        $validateData['harga'] = $request['harga'];
        $validateData['taklimat'] = $request['taklimat'];
        $validateData['pertanyaan'] = $request['pertanyaan'];
        $validateData['masa'] = $request['masa'];
        $validateData['filename'] = $filenametostore;

        Tender::create($validateData);

        return redirect('/spsm/admin/tender')->with('success', 'Satu tender telah berjaya disimpan dan akan mula dipaparkan pada ' . $validateData['show']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        return view('spsm.admin.tender.show', [
            'title' => $tender->title_my,
            'leadCrumbs' => 'Perolehan',
            'link' => '/spsm/admin/tender',
            'tender' => $tender,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit(Tender $tender)
    {
        return view('spsm.admin.tender.edit', [
            'title' => $tender->title_my,
            'leadCrumbs' => 'Perolehan',
            'link' => '/spsm/admin/tender',
            'tender' => $tender,
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tender $tender)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'tempoh' => 'required',
            'show' => 'required',
            'hide' => 'required',
            'status_id' => 'required'
        ]);

        if ($request->file('filename') != '') {
            // Create a function to delete old files

            // Get filename with extension
            $filenamewithextension = $request->file('filename')->getClientOriginalName();

            // Filter out the extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            // Filter out the filename
            $extension = $request->file('filename')->getClientOriginalExtension();

            // Remove all white spaces
            $filenametostore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $extension;

            // Store with filename
            $request->file('filename')->storeAs('public/upload/doc', $filenametostore);

            $validateData['filename'] = $filenametostore;
        } else {
            $validateData['filename'] = $request['oldFile'];
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['kod'] = $request['kod'];
        $validateData['harga'] = $request['harga'];
        $validateData['taklimat'] = $request['taklimat'];
        $validateData['pertanyaan'] = $request['pertanyaan'];
        $validateData['masa'] = $request['masa'];

        Tender::where('id', $tender->id)->update($validateData);

        return redirect('/spsm/admin/tender')->with('success', 'Satu tender telah berjaya dikemaskini dan akan mula dipaparkan pada ' . $validateData['show']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tender $tender)
    {
        Tender::destroy($tender->id);

        return redirect('/spsm/admin/tender')->with('success', 'Satu perolehan telah berjaya dipadam');
    }
}

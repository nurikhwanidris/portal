<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.quote.index', [
            'title' => 'Senarai Sebut Harga',
            'leadCrumbs' => 'Sebut Harga',
            'link' => '/spsm/admin/quote',
            'quotes' => Quote::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.quote.create', [
            'title' => 'Cipta Sebut Harga',
            'leadCrumbs' => 'Sebut Harga',
            'link' => '/spsm/admin/quote',
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
            'paparanMula' => 'required',
            'paparanTamat' => 'required',
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

        Quote::create($validateData);

        return redirect('/spsm/admin/quote')->with('success', 'Satu tender telah berjaya disimpan dan akan mula dipaparkan pada ' . $validateData['paparanMula']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return view('spsm.admin.quote.show', [
            'title' => $quote->title_my,
            'leadCrumbs' => 'Perolehan',
            'link' => '/spsm/admin/quote',
            'quote' => $quote,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        return view('spsm.admin.quote.edit', [
            'title' => $quote->title_my,
            'leadCrumbs' => 'Perolehan',
            'link' => '/spsm/admin/quote',
            'quote' => $quote,
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'tempoh' => 'required',
            'paparanMula' => 'required',
            'paparanTamat' => 'required',
            'status_id' => 'required'
        ]);

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

        $validateData['user_id'] = auth()->user()->id;
        $validateData['kod'] = $request['kod'];
        $validateData['harga'] = $request['harga'];
        $validateData['taklimat'] = $request['taklimat'];
        $validateData['pertanyaan'] = $request['pertanyaan'];
        $validateData['masa'] = $request['masa'];
        $validateData['filename'] = $filenametostore;

        Quote::where('id', $quote->id)->update($validateData);

        return redirect('/spsm/admin/quote')->with('success', 'Satu sebut harga telah berjaya dikemaskini dan akan mula dipaparkan pada ' . $validateData['paparanMula']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        Quote::destroy($quote->id);

        return redirect('/spsm/admin/quote')->with('success', 'Satu sebut harga telah berjaya dipadam');
    }
}

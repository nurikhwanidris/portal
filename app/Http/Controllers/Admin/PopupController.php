<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Popup;
use App\Models\Status;
use App\Http\Requests\StorePopupRequest;
use App\Http\Requests\UpdatePopupRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.popup.index', [
            'title' => 'List of Popups',
            'leadCrumbs' => 'Popup',
            'link' => '/spsm/admin/popup',
            'popups' => Popup::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.popup.create', [
            'title' => 'Create Popup',
            'leadCrumbs' => 'Popup',
            'link' => '/spsm/admin/popup',
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePopupRequest $request)
    {
        $validateData = $request->validate([
            'tajuk' => 'required',
            'status_id' => 'required',
            'content' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['show'] = $request->show;
        $validateData['hide'] = $request->hide;

        Popup::create($validateData);

        return redirect('/spsm/admin/popup/create')->with('success', 'Satu popup baru berjaya ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function edit(Popup $popup)
    {
        return view('spsm.admin.popup.edit', [
            'title' => 'Edit Popup',
            'leadCrumbs' => 'Popup',
            'link' => '/spsm/admin/popup',
            'popup' => $popup,
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePopupRequest  $request
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePopupRequest $request, Popup $popup)
    {
        // Validate the data
        $validateData = $request->validate([
            'tajuk' => 'required',
            'status_id' => 'required',
            'content' => 'required',
        ]);

        // Get user ID
        $validateData['user_id'] = auth()->user()->id;
        $validateData['show'] = $request->show;
        $validateData['hide'] = $request->hide;

        // Update the row
        Popup::where('id', $popup->id)->update($validateData);

        return redirect('/spsm/admin/popup')->with('success', 'Satu popup telah berjaya diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popup $popup)
    {
        Popup::destroy($popup->id);

        return redirect('/spsm/admin/popup')->with('success', 'Satu popup telah berjaya dipadam');
    }
}

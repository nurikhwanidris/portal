<?php

namespace App\Http\Controllers;

use App\Models\Gis;
use App\Models\Status;
use Illuminate\Http\Request;

class GisController extends Controller
{
    public function index()
    {
    return view('spsm.admin.gis.index', [
            'title' => 'Senarai Buletin GIS',
            'leadCrumbs' => 'Buletin GIS',
            'link' => '/spsm/admin/gis',
            'bulletins' => Gis::with('status')->get(),
        ]);
    }

    public function create()
    {
        return view('spsm.admin.gis.create', [
            'title' => 'Cipta Buletin GIS',
            'leadCrumbs' => 'Buletin GIS',
            'link' => '/spsm/admin/gis',
            'statuses' => Status::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'year' => 'required',
            'status_id' => 'required',
            'gambarHadapan' => 'required',
            'filename' => 'required',
        ]);

        // Get filename with extension
        $pdfWithExtension = $request->file('filename')->getClientOriginalName();
        $gambarWithExtension = $request->file('gambarHadapan')->getClientOriginalName();

        // Filter out the extension
        $pdf = pathinfo($pdfWithExtension, PATHINFO_FILENAME);
        $gambar = pathinfo($gambarWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $pdfExtension = $request->file('filename')->getClientOriginalExtension();
        $gambarExtension = $request->file('gambarHadapan')->getClientOriginalExtension();

        // Remove all white spaces
        $gambarName = str_replace(' ', '-', $gambar) . '-' . time() . '.' . $gambarExtension;
        $pdfName = str_replace(' ', '-', $pdf) . '-' . time() . '.' . $pdfExtension;

        // Store with filename
        $request->file('filename')->storeAs('public/upload/doc/', $pdfName);
        $request->file('gambarHadapan')->storeAs('public/upload/img/', $gambarName);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['gambarHadapan'] = $gambarName;
        $validateData['filename'] = $pdfName;

        Gis::create($validateData);

        return redirect('/spsm/admin/gis')->with('success', 'Satu buletin telah berjaya disimpan');
    }

    public function destroy(Gis $gis)
    {
        Gis::destroy($gis->id);

        return redirect('/spsm/admin/gis')->with('success', 'Satu buletin telah berjaya dipadam');
    }

    // Edit
    public function edit(Gis $edit)
    {
        return view('spsm.admin.buletingis.edit',[
            'title' => 'Ubah Buletin GIS',
            'leadCrumbs' => 'Buletin GIS',
            'link' => '/spsm/admin/gis',
            'gis' => $edit,
            'statuses' => Status::all(),
        ]);
    }

    public function change(Request $request, Gis $update)
    {
        $validateData =$request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'year' => 'required',
            'status_id' => 'required',
        ]);

            if ($request->file('filename') != '') {
                // Get file name with extension
                $pdfWithExtension =$request->file('filename')->getClientOriginalName();

                // Get the filename
                $pdf = pathinfo($pdfWithExtension, PATHINFO_FILENAME);

                // Get the extension
                $pdfExtension =$request->file('filename')->getClientOriginalExtension();

                // Rename the file
                $pdfName = str_replace(' ', '-', $pdf) . '-' . time() . '.' . $pdfExtension;

                // Store the file
               $request->file('filename')->storeAs('public/upload/doc/', $pdfName);

                // Insert into db
                $validateData['filename'] = $pdfName;
            } else {
                $validateData['filename'] = $request['oldFile'];
            }

            if ($request->file('gambarHadapan')  != '') {
                // Get file name with extension
                $gambarWithExtension = $request->file('gambarHadapan')->getClientOriginalName();

                // Get the filename
                $gambar = pathinfo($gambarWithExtension, PATHINFO_FILENAME);

                // Get the extension
                $gambarExtension =$request->file('gambarHadapan')->getClientOriginalExtension();

                // Rename the file
                $gambarName = str_replace(' ', '-', $gambar) . '-' . time() . '.' . $gambarExtension;

                // Store the file
               $request->file('gambarHadapan')->storeAs('public/upload/img/', $gambarName);

                // Insert into db
                $validateData['gambarHadapan'] = $gambarName;
            } else {
                $validateData['gambarHadapan'] = $request['oldGambar'];
            }

        $validateData['user_id'] = auth()->user()->id;

        Gis::where('id', $update->id)->update($validateData);

        return redirect('/spsm/admin/buletingis')->with('success', 'Satu buletin telah berjaya diubah');
    }

    public function delete(Gis $delete)
    {
        Gis::destroy($delete->id);

        return redirect('/spsm/admin/buletingis')->with('success', 'Satu buletin telah berjaya dipadam');
    }

}

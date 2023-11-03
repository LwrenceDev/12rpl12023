<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =Complaint::all();
        return view('complaint.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sumuk= Complaint::all();
        return view('complaint.create', compact('sumuk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'status' => 'required'
        ]);

        $data=$request->all();
        $data['id_user']=1;
        Complaint::create($data);
        return redirect('/complaint')->with('success', 'Data has been added successfully!');
    }

 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        return view('complaint.edit', compact ('complaint'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complaint $complaint)
    {
        $request->validate([
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'status' => 'required'
        ]);

       $dl=Complaint::findorfail($complaint->id);
       $db=$request->all();
       $dl->update($db);
        return redirect('/complaint')->with('success', 'Data has been edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        
        Complaint::destroy($complaint->id);
       return redirect('/complaint')->with('success', 'Data has been delete successfully!');
    }
}

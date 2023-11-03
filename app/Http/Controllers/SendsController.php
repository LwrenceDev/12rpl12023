<?php

namespace App\Http\Controllers;

use App\Models\Send;
use Illuminate\Http\Request;

class SendsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =Send::all();
        return view('send.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('send.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_agenda' => 'required',
            'jenis_surat' => 'required',
            'tanggal_kirim' => 'required',
          
            'no_surat' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required'
        ]);

        $data=$request->all();
        $data['id_user']=1;
        Send::create($data);
        return redirect('/send')->with('success', 'Data has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(send $send)
    {
        return view('send.view', compact ('send'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(send $send)
    {
        return view('send.edit', compact ('send'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, send $send)
    {
        $request->validate([
            'no_agenda' => 'required',
            'jenis_surat' => 'required',
            'tanggal_kirim' => 'required',
            'no_surat' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required'
        ]);

       $dl=Send::findorfail($send->id);
       $db=$request->all();
       $dl->update($db);
        return redirect('/send')->with('success', 'Data has been edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(send $send)
    {
        Send::destroy($send->id);
       return redirect('/send')->with('success', 'Data has been edit successfully!');
    }
}

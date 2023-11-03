<?php

namespace App\Http\Controllers;

use App\Models\Disposition;
use App\Models\Inbox;
use Illuminate\Http\Request;

class DispositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =Disposition::all();
        return view('disposition.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sumuk= Inbox::all();
        return view('disposition.create', compact('sumuk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_agenda' => 'required',
            'no_disposisi' => 'required',
            'no_surat' => 'required',
            'kepada' => 'required',
            'status_surat' => 'required',
            'tanggapan' => 'required',
           
        ]);

        $data=$request->all();
        $data['id_user']=1;
        Disposition::create($data);

        $dl=Inbox::findOrfail($request->id_suratmasuk);
        $dl->relasi = '1';
        $dl->save();
        return redirect('/disposition')->with('success', 'Data has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disposition $disposition)
    {
        return view('disposition.view', compact ('disposition'));
        // return redirect('/inbox');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disposition $disposition)
    {
        $sumuk= Inbox::all();
        return view('disposition.edit', compact('sumuk', 'disposition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disposition $disposition)
    {
        $request->validate([
            'id_suratmasuk' => 'required',
            'no_agenda' => 'required',
            'no_disposisi' => 'required',
            'no_surat' => 'required',
            'kepada' => 'required',
            'status_surat' => 'required',
            'tanggapan' => 'required',
           
        ]);

       $dl=Disposition::findOrfail($disposition->id);
       $db=$request->all();
       $dl->update($db);

       //ubah inbox
       $idinboxlama=Inbox::findOrfail($disposition->id_suratmasuk);
       $idinboxbaru=Inbox::findOrfail($request->id_suratmasuk);

       //return inbox baru
       if($idinboxlama!=$idinboxbaru)
       {
        $idinboxlama->relasi=0;
        $idinboxlama->save();
        $idinboxbaru->relasi=1;
        $idinboxbaru->save();

       }
        return redirect('/disposition')->with('success', 'Data has been edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disposition $disposition)
    {
        
        Disposition::destroy($disposition->id);

        // ubah inbox
        $inbox=Inbox::findOrfail($disposition->id_suratmasuk);
        $inbox->relasi=0;
        $inbox->save();

       return redirect('/disposition')->with('success', 'Data has been delete successfully!');
    }
}

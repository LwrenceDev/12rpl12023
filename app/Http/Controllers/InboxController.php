<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->cari)
       {
            $cari=$request->cari;
            $data=Inbox::where('no_agenda','like',"%".$cari."%")->paginate(3);
        }else{
            $data =Inbox::orderBy('no_agenda')->paginate(3);
        }
        $data->appends($request->all());
        return view('inbox.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inbox.create');
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
            'tanggal_terima' => 'required',
            'no_surat' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required'
        ]);

        $data=$request->all();
        $data['id_user']=1;
        Inbox::create($data);
        return redirect('/inbox')->with('success', 'Data has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inbox $inbox)
    {
        return view('inbox.view', compact ('inbox'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inbox $inbox)
    {
        return view('inbox.edit', compact('inbox'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inbox $inbox)
    {
        $request->validate([
            'no_agenda' => 'required',
            'jenis_surat' => 'required',
            'tanggal_kirim' => 'required',
            'tanggal_terima' => 'required',
            'no_surat' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required'
        ]);

       $dl=Inbox::findorfail($inbox->id);
       $db=$request->all();
       $dl->update($db);
        return redirect('/inbox')->with('success', 'Data has been edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inbox $inbox)
    {
        Inbox::destroy($inbox->id);
       return redirect('/inbox')->with('success', 'Data has been edit successfully!');
    }
}

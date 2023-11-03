<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =Response::all();
        return view('response.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sumuk= Complaint::all();
        return view('response.create', compact('sumuk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_tanggapan' => 'required',
            'tanggapan'=> 'required'
           
        ]);

        $data=$request->all();
        $data['id_pengaduan']=1;
        $data['id_petugas']=1;
        Response::create($data);
        return redirect('/response')->with('success', 'Data has been added successfully!');
    }

    /**
     * Display the specified resource.
     
    public function show(Response $response)
    {
        return view('response.view', compact('response'));
    }
    */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Response $response)
    {
        return view('response.edit', compact ('response'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Response $response)
    {
        $request->validate([
            'tgl_tanggapan' => 'required',
            'tanggapan'=> 'required'
           
        ]);

       $dl=Response::findorfail($response->id);
       $db=$request->all();
       $dl->update($db);
        return redirect('/response')->with('success', 'Data has been edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Response $response)
    {
        
        Response::destroy($response->id);
       return redirect('/response')->with('success', 'Data has been delete successfully!');
    }
}

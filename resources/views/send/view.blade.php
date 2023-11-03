@extends('template.main')
@section('judul','Data Surat Masuk')
@section('konten')
@section('send','active')

<div class="product-card shadow">
    <div class="row ">
        <div class="col-lg-6">
            <table class="title-section-content">
                <tr>
                    <th width="30%">No agenda</th>
                    <td width="2%">:</td>
                    <td>{{$send->no_agenda}}</td>
                </tr>
                <tr>
                    <th width="30%">Jenis Surat</th>
                    <td width="2%">:</td>
                    <td>{{$send->jenis_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Tanggal Kirim</th>
                    <td width="2%">:</td>
                    <td>{{Carbon\Carbon::create($send->tanggal_kirim)->format('d F Y')}}</td>
                </tr>
              
                <tr>
                    <th width="30%">Pengirim</th>
                    <td width="2%">:</td>
                    <td>{{$send->pengirim}}</td>
                </tr>
                <tr>
                    <th width="30%">perihal</th>
                    <td width="2%">:</td>
                    <td>{{$send->perihal}}</td>
                </tr>
            </table>
            <a class="btn btn-secondary m-3" href="/send">Kembali</a>
        </div>
    </div>
</div>

@endsection

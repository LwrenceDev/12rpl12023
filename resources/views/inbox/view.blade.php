@extends('template.main')
@section('judul','Data Surat Masuk')
@section('konten')
@section('inbox','active')

<div class="product-card shadow">
    <div class="row ">
        <div class="col-lg-6">
            <table class="title-section-content">
                <tr>
                    <th width="30%">No agenda</th>
                    <td width="2%">:</td>
                    <td>{{$inbox->no_agenda}}</td>
                </tr>
                <tr>
                    <th width="30%">Jenis Surat</th>
                    <td width="2%">:</td>
                    <td>{{$inbox->jenis_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Tanggal Kirim</th>
                    <td width="2%">:</td>
                    <td>{{Carbon\Carbon::create($inbox->tanggal_kirim)->format('d F Y')}}</td>
                </tr>
                <tr>
                    <th width="30%">Tanggal Terima</th>
                    <td width="2%">:</td>
                    <td>{{Carbon\Carbon::create($inbox->tanggal_terima)->format('d F Y')}}</td>
                </tr>
                <tr>
                    <th width="30%">Pengirim</th>
                    <td width="2%">:</td>
                    <td>{{$inbox->pengirim}}</td>
                </tr>
                <tr>
                    <th width="30%">Perihal</th>
                    <td width="2%">:</td>
                    <td>{{$inbox->perihal}}</td>
                </tr>
            </table>
            <a class="btn btn-secondary m-3" href="/inbox">Back</a>
        </div>
    </div>
</div>

@endsection

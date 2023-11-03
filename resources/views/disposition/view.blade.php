@extends('template.main')
@section('judul','Data Surat Disposisi')
@section('konten')
@section('disposition','active')

<<div class="product-card shadow">
    <div class="row ">
        <div class="col-lg-6">
            <table class="title-section-content">
                <tr>
                    <th width="30%">No Agenda</th>
                    <td width="2%">:</td>
                    <td>{{$disposition->no_agenda}}</td>
                </tr>
                <tr>
                    <th width="30%">No Disposition</th>
                    <td width="2%">:</td>
                    <td>{{$disposition->no_disposisi}}</td>
                </tr>
                <tr>
                    <th width="30%">No Surat</th>
                    <td width="2%">:</td>
                    <td>{{$disposition->no_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Kepada</th>
                    <td width="2%">:</td>
                    <td>{{$disposition->kepada}}</td>
                </tr>
                <tr>
                    <th width="30%">Status Surat</th>
                    <td width="2%">:</td>
                    <td>{{$disposition->status_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Tanggapan</th>
                    <td width="2%">:</td>
                    <td>{{$disposition->tanggapan}}</td>
                </tr>
            </table>
            <a class="btn btn-secondary m-3" href="/disposition">Back</a>
        </div>
    </div>
</div>

@endsection

@extends('template.main')
@section('judul','Tambah Data Surat Response')
@section('konten')
@section('response','active')
<div class="product-card shadow">

    <form action="/response/{{$response->id}}" class="title-section-content" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="tgl_tanggapan">Tanggal Tanggapan:</label>
            <input  value="{{$response->tgl_tanggapan}}" type="date" name="tgl_tanggapan" class="form-control @error('tgl_tanggapan') is-invalid
            @enderror">
            @error('tgl_tanggapan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggapan">Tanggapan:</label>
            <input value="{{$response->tanggapan}}" type="text" name="tanggapan" class="form-control  @error('tanggapan') is-invalid
            @enderror ">
            @error('tanggapan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
      
        <button value="{{('tgl_tanggapan')}}" type="submit" class="btn btn-primary">Ubah Data</button>
        <a href="http://127.0.0.1:8000/response" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection

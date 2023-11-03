@extends('template.main')
@section('judul','Tambah Data Surat Response')
@section('konten')
@section('response','active')
<div class="product-card shadow">

    <form action="/response" class="title-section-content" method="POST">
        @csrf
        <div class="mb-3">
            <label class="title-section-content">Pilih Id Pengaduan</label>
            <select name="id_pengaduan" id="" class="form-control">
                <option value="">-- Pilih Pengaduan --</option>
                @foreach ($sumuk as $x)
                    @if ($x->relasi==0)
                        <option value="{{$x->id}}">{{$x->id}}</option>
                    @endif
                @endforeach
            </select>
            @error('id_pengaduan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tgl_tanggapan">Tanggal Tanggapan:</label>
            <input  value="{{old('tgl_tanggapan')}}" type="date" name="tgl_tanggapan" class="form-control @error('tgl_tanggapan') is-invalid
            @enderror">
            @error('tgl_tanggapan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggapan">Tanggapan:</label>
            <input value="{{old('tanggapan')}}" type="text" name="tanggapan" class="form-control  @error('tanggapan') is-invalid
            @enderror ">
            @error('tanggapan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
      
        <button value="" type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="http://127.0.0.1:8000/response" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
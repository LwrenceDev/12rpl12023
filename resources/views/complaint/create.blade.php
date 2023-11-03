@extends('template.main')
@section('judul','Tambah Data Surat Complaint')
@section('konten')
@section('complaint','active')
<div class="product-card shadow">

    <form action="/complaint" class="title-section-content" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tgl_pengaduan">Tanggal Pengaduan:</label>
            <input  value="{{old('tgl_pengaduan')}}" type="date" name="tgl_pengaduan" class="form-control @error('tgl_pengaduan') is-invalid
            @enderror">
            @error('tgl_pengaduan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nik">NIK:</label>
            <input value="{{old('nik')}}" type="text" name="nik" class="form-control  @error('nik') is-invalid
            @enderror ">
            @error('nik')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="isi_laporan">Isi Laporan:</label>
            <input value="{{old('isi_laporan')}}" type="text" name="isi_laporan" class="form-control  @error('isi_laporan') is-invalid
            @enderror">
            @error('isi_laporan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
       
        <div class="mb-3">
            <label for="">Status Surat</label>
            <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
                <option value="">--Pilih Status Surat--</option>
                <option value="diproses">diproses</option>
                <option value="ditolak">ditolak</option>
                <option value="selesai">selesai</option>
            </select>
            @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
      
        <button value="" type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="http://127.0.0.1:8000/complaint" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
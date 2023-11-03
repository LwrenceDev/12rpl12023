@extends('template.main')
@section('judul','Tambah Data Surat Complaint')
@section('konten')
@section('complaint','active')
<div class="product-card shadow">

    <form action="/complaint/{{$complaint->id}}" class="title-section-content" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="tgl_pengaduan">Tanggal Pengaduan:</label>
            <input  value="{{$complaint->tgl_pengaduan}}" type="date" name="tgl_pengaduan" class="form-control @error('tgl_pengaduan') is-invalid
            @enderror">
            @error('tgl_pengaduan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nik">NIK:</label>
            <input value="{{$complaint->nik}}" type="text" name="nik" class="form-control  @error('nik') is-invalid
            @enderror ">
            @error('nik')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="isi_laporan">Isi laporan:</label>
            <input value="{{$complaint->isi_laporan}}" type="text" name="isi_laporan" class="form-control  @error('isi_laporan') is-invalid
            @enderror ">
            @error('isi_laporan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Status</label>
            <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
                <option value=x >--Pilih Status Surat--</option>
                <option value="diproses">Diproses</option>
                <option value="ditolak">Ditolak</option>
                <option value="selesai">Selesai</option>
            </select>
            @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
      
        <button value="{{('tgl_pengaduan')}}" type="submit" class="btn btn-primary">Ubah Data</button>
        <a href="http://127.0.0.1:8000/complaint" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection

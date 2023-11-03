@extends('template.main')
@section('judul','Tambah Data Surat Masuk')
@section('konten')
@section('inbox','active')
<div class="product-card shadow">

    <form action="/inbox/{{$inbox->id}}" class="title-section-content" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="no_agenda">No Agenda:</label>
            <input  value="{{$inbox->no_agenda}}" type="text" name="no_agenda" class="form-control @error('no_agenda') is-invalid
            @enderror">
            @error('no_agenda')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jenis_surat">Jenis Surat:</label>
            <input value="{{$inbox->jenis_surat}}" type="text" name="jenis_surat" class="form-control  @error('jenis_surat') is-invalid
            @enderror ">
            @error('jenis_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_kirim">Tanggal Kirim:</label>
            <input value="{{$inbox->tanggal_kirim}}" type="date" name="tanggal_kirim" class="form-control  @error('tanggal_kirim') is-invalid
            @enderror">
            @error('tanggal_kirim')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_terima">Tanggal Terima:</label>
            <input value="{{$inbox->tanggal_terima}}" type="date" name="tanggal_terima" class="form-control  @error('tanggal_terima') is-invalid
            @enderror">
            @error('tanggal_terima')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_surat">No surat:</label>
            <input value="{{$inbox->no_surat}}" type="text" name="no_surat" class="form-control  @error('no_surat') is-invalid
                
            @enderror">
            @error('no_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pengirim">Pengirim:</label>
            <input value="{{$inbox->pengirim}}" type="text" name="pengirim" class="form-control  @error('pengirim') is-invalid
                
            @enderror">
            @error('pengirim')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="perihal">Perihal:</label>
            <input value="{{$inbox->perihal}}" type="text" name="perihal" class="form-control  @error('perihal') is-invalid
                
            @enderror">
            @error('perihal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button value="{{('no_agenda')}}" type="submit" class="btn btn-primary">edit Data</button>
        <a href="http://127.0.0.1:8000/inbox" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection

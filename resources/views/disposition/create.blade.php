@extends('template.main')
@section('judul','Tambah Data Surat Disposisi')
@section('konten')
@section('disposition','active')
<div class="product-card shadow">

    <form action="/disposition" class="title-section-content" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for=""> pilih surat masuk</label>
            <select name="id_suratmasuk" id="" class="form-control @error('id_suratmasuk') is-invalid @enderror">
                <option value="">--Pilih Status Surat--</option>
                @foreach ($sumuk as $x)
                @if($x->relasi==0)
                <option value="{{ $x->id }}">{{ $x->no_surat }}</option>
                @endif
                @endforeach
            </select>
            @error('id_syratmasuk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_agenda">No Agenda:</label>
            <input  value="{{old('no_agenda')}}" type="text" name="no_agenda" class="form-control @error('no_agenda') is-invalid
            @enderror">
            @error('no_agenda')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_disposition">No disposition:</label>
            <input value="{{old('no_disposisi')}}" type="text" name="no_disposisi" class="form-control  @error('no_disposisi') is-invalid
            @enderror ">
            @error('no_disposisi')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>No Surat</label>
            <input value="{{old('no_surat')}}" type="text" name="no_surat" class="form-control  @error('no_surat') is-invalid
            @enderror ">
            @error('no_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kepada">kepada:</label>
            <input value="{{old('kepada')}}" type="text" name="kepada" class="form-control  @error('kepada') is-invalid
            @enderror">
            @error('kepada')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
       
        <div class="mb-3">
            <label for="">Status Surat</label>
            <select name="status_surat" id="" class="form-control @error('status_surat') is-invalid @enderror">
                <option value="">--Pilih Status Surat--</option>
                <option value="dipertimbangkan">Dipertimbangkan</option>
                <option value="ditindaklanjut">Ditindaklanjuti</option>
                <option value="diarsipkan">Diarsipkan</option>
            </select>
            @error('status_surat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggapan">tanggapan:</label>
            <input value="{{old('tanggapan')}}" type="text" name="tanggapan" class="form-control  @error('tanggapan') is-invalid
                
            @enderror">
            @error('tanggapan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
     
        <button type="submit" class="btn btn-primary">Create Data</button>
        <a href="/disposition" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection

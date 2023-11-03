@extends('template.main')
@section('judul','Form Ubah Data Surat Disposisi')
@section('dispo','active')
@section('konten')
<div class="product-card shadow">
    <form action="/disposition/{{$disposition->id}}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="">Pilih Inbox :</label>
            <select name="id_suratmasuk" class="form-control @error('id_suratmasuk') is-invalid @enderror" id="">
                <option value="{{$disposition->id_suratmasuk}}">--Pilih Jika Ingin Diubah--</option>
                @foreach ($sumuk as $x)
                    @if ($x->relasi==0)
                        <option value="{{$x->id}}">{{$x->no_surat}}</option>
                    @endif
                @endforeach
            </select>
            
            @error('id_suratmasuk')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No Disposisi :</label>
            <input value="{{$disposition->no_disposisi}}" name="no_disposisi" type="text" class="form-control @error('no_disposisi') is-invalid @enderror">
            @error('no_disposisi')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No Agenda :</label>
            <input value="{{$disposition->no_agenda}}" name="no_agenda" type="text" class="form-control @error('no_agenda') is-invalid @enderror">
            @error('no_agenda')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No Surat :</label>
            <input value="{{$disposition->no_surat}}" name="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror">
            @error('no_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Kepada :</label>
            <input value="{{$disposition->kepada}}" name="kepada" type="text" class="form-control @error('kepada') is-invalid @enderror">
            @error('kepada')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>        
        <div class="mb-3">
            <label for="">Status Surat :</label>
            <select name="status_surat" id="" class="form-control @error('status_surat') is-invalid @enderror">
                <option value="{{$disposition->status_surat}}">--Pilih Jika Ingin Diubah--</option>
                <option value="diarsipkan">Diarsipkan</option>
                <option value="ditindaklanjuti">Ditindaklanjuti</option>
                <option value="dipertimbangkan">Dipertimbangkan</option>
            </select>
            @error('status_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Tanggapan :</label>
            <input value="{{$disposition->tanggapan}}" name="tanggapan" type="text" class="form-control @error('tanggapan') is-invalid @enderror">
            @error('tanggapan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn btn-secondary" href="/disposition">Kembali</a>
            <button type="submit" class="btn btn-warning">Ubah Data</button>
        </div>
    </form>
</div>
@endsection
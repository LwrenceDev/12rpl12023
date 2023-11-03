@extends('template.main')
@section('judul','Data Surat Complaint')
@section('konten')
@section('complaint','active')
<div class="product-card shadow">
    <a class="btn btn-primary mb-3 mt-3" href="/complaint/create">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square"
        viewBox="0 0 16 16">
        <path
          d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
        <path
          d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
      </svg>
      Tambah Data
    </a>
    <table class="table">
      <thead>
        <th>#</th>
        <th>Tanggal Pengaduan</th>
        <th>Nik</th>
        <th>Isi Laporan</th>
        <th>Status</th>
       
      
        <th class="text-center">Aksi</th>
      </thead>
      <tbody>
        @foreach ($data as $x )
          
       
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$x->tgl_pengaduan}}</td>
          <td>{{$x->nik}}</td>
          <td>{{$x->isi_laporan}}</td>
          <td>{{$x->status}}</td>
         
         
          
          <td class="text-center">
            <a class="btn badge bg-warning" href="/complaint/{{$x->id}}/edit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path
                  d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd"
                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
              </svg>
              Ubah</a>
           <form onclick="return confirm('apakah kamu yakin hapus data?')" action="/complaint/{{$x->id}}" method="post"
           class="d-inline">
           @csrf
           @method('delete')
           
              <button type="submit" class="btn badge bg-danger" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-trash-fill" viewBox="0 0 16 16">
                  <path
                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                </svg>
                Hapus
              </button>
            
           </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
   
   
  </table>
</div>

@if (session('success'))
    <script>
      Swal.fire({
  position: 'center',
  icon: 'success',
  title: '{{session('success')}}',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
@endsection
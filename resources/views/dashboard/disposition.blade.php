<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Laporan Surat Disposisi</title>
</head>

<body>
        <h3>Laporan Surat Disposisi <span class="text-primary">PT. Reignlf</span></h3>
        <p style="font-size: 12px; font-style: italic">{{ Carbon\Carbon::create(now())->format('d F Y H:i:s')}}</p>
        <hr class="bg-dark" style="height: 2px">

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
            <th>#</th>
            <th>No Disposisi</th>
            <th>No Agenda</th>
            <th>No Surat</th>
            <th>status Surat</th>
            <th>Tanggapan</th>
        </thead>
        <tbody>
            @foreach ($disposition as $x)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$x->no_disposisi}}</td>
                <td>{{$x->no_agenda}}</td>
                <td>{{$x->no_surat}}</td>
                <td>{{$x->status_surat}}</td>
                <td>{{$x->tanggapan}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>


    <div class="row">
            <div class="offset-9 text-center">
                <p>Pekanbaru, {{Carbon\Carbon::create(now())->format('d F Y')}}</p>
                <img class="" style="width: 100px" src="data:image/png;base64,{{DNS2D::getBarcodePNG($idlogin, 'QRCODE')}}" alt="barcode"   />
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
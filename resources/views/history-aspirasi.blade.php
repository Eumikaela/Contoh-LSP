<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum Aspirasi Masyarakat</title>
    <link rel="icon" type="image/x-icon"
        href="https://64.media.tumblr.com/4545a2cb0c84aa134291d68f8d9ed3dd/24cb1a974e617a76-dc/s400x600/9e6598f940f59490445e0245bc9990389e7db4cc.pnj">
</head>
@include('link')

<body>
    @include('header')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-10 col-sm-12">
                <h1 class="my-4" style="text-align: center;">Histori Aspirasi</h1>
                <div class="container">
                    <div class="row">
                    </div>
                </div>
                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <thead class="border border-dark bg-light">
                            <tr style="text-align: center;">
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Aspirasi</th>
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($laporan as $key => $data)
                            <tr style="text-align: center;">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->kategori }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->aspirasi }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>
                                    <img src="{{ asset($data->gambar_kejadian) }}" alt="" width="50">
                                </td>
                                <td>
                                    <b>
                                        <span class="badge rounded-pill py-2 px-4
                                                    @if ($data->status == 'pending') bg-danger
                                                    @elseif($data->status == 'progress') bg-warning
                                                    @elseif($data->status == 'done') bg-success @endif">
                                            {{ strtoupper($data->status) }}
                                        </span>
                                    </b>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    {{-- Table History --}}

</body>
</html>

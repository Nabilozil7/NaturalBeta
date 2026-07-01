<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Properti NATURAL LAND</title>

<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12px;
        margin: 20px;
        color: #333;
    }

    .kop {
        border-bottom: 2px solid #198754;
        padding-bottom: 10px;
        margin-bottom: 20px;
        text-align: center;
    }

    .judul {
        font-size: 18px;
        font-weight: bold;
        color: #198754;
    }

    .subjudul {
        font-size: 11px;
        color: #666;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background: #198754;
        color: white;
        padding: 8px;
        font-size: 11px;
    }

    td {
        border: 1px solid #ddd;
        padding: 6px;
        font-size: 11px;
    }

    .img {
        width: 60px;
        height: 45px;
        object-fit: cover;
    }

    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        font-size: 10px;
        color: #777;
    }
</style>

</head>

<body>

<!-- HEADER -->
<div class="kop">
    <table width="100%">
        <tr>
            <td width="80">
                @php
                    $path = public_path('asset/gambar/logo/akk.png');
                    $base64 = null;

                    if (file_exists($path)) {
                        $type = pathinfo($path, PATHINFO_EXTENSION);
                        $data = file_get_contents($path);
                        $base64 = 'data:image/'.$type.';base64,'.base64_encode($data);
                    }
                @endphp

                @if($base64)
                    <img src="{{ $base64 }}" width="70">
                @endif
            </td>

            <td style="text-align:center;">
                <h2 style="margin:0; color:#198754;">AKEKA</h2>
                <p style="margin:3px 0;">LAPORAN DATA PRODUK</p>
                <small>Sistem Pengadaan Alat Kebersihan Kantor</small>
            </td>
        </tr>
    </table>
</div>

<!-- TABLE -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Pemilik</th>
            <th>Jenis</th>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <!-- GAMBAR BASE64 -->
            <td>
                @php
                    $path = public_path('properti/'.$project->gambar);
                    $base64 = null;

                    if ($project->gambar && file_exists($path)) {
                        $type = pathinfo($path, PATHINFO_EXTENSION);
                        $data = file_get_contents($path);
                        $base64 = 'data:image/'.$type.';base64,'.base64_encode($data);
                    }
                @endphp

                @if($base64)
                    <img src="{{ $base64 }}" class="img">
                @else
                    <span>No Image</span>
                @endif
            </td>

            <td>{{ $project->nama_pemilik }}</td>
            <td>{{ $project->jenis }}</td>
            <td>{{ $project->lokasi }}</td>
            <td>Rp {{ number_format($project->harga, 0, ',', '.') }}</td>
            <td>{{ $project->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- FOOTER -->
<div class="footer">
    © {{ date('Y') }} NATURAL LAND PROPERTY
</div>

</body>
</html>
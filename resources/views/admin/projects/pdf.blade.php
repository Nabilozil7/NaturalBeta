<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Properti NATURAL LAND</title>

```
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12px;
        margin: 20px;
        color: #333;
    }

    /* ===== KOP SURAT ===== */
    .kop {
        border-bottom: 2px solid #198754;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .kop-table {
        width: 100%;
    }

    .logo {
        width: 70px;
        height: 70px;
        object-fit: contain;
    }

    .judul {
        font-size: 18px;
        font-weight: bold;
        color: #198754;
        text-align: center;
    }

    .subjudul {
        font-size: 11px;
        text-align: center;
        color: #666;
    }

    /* ===== TABLE ===== */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background: #198754;
        color: white;
        padding: 8px;
        font-size: 11px;
        text-align: left;
    }

    td {
        border: 1px solid #ddd;
        padding: 6px;
        font-size: 11px;
        vertical-align: middle;
    }

    tr:nth-child(even) {
        background: #f8f9fa;
    }

    .img {
        width: 60px;
        height: 45px;
        object-fit: cover;
        border-radius: 5px;
    }

    /* FOOTER */
    .footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 10px;
        color: #777;
        border-top: 1px solid #ddd;
        padding-top: 5px;
    }
</style>
```

</head>

<body>

<!-- KOP SURAT -->

<div class="kop">
    <table class="kop-table">
        <tr>
            <td style="width: 15%;">
                <img src="{{ url('gambar/logo.png') }}" class="logo">
            </td>

```
        <td style="width: 85%;">
            <div class="judul">LAPORAN DATA PROPERTI</div>
            <div class="subjudul">
                NATURAL LAND PROPERTY - Sistem Informasi Manajemen Properti
            </div>
        </td>
    </tr>
</table>
```

</div>

<!-- TABLE -->

<table>
    <thead>
        <tr>
            <th width="5%">No</th>
            <th width="15%">Gambar</th>
            <th>Nama Pemilik</th>
            <th>Jenis</th>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>Status</th>
        </tr>
    </thead>

```
<tbody>
    @foreach ($projects as $project)
    <tr>
        <td>{{ $loop->iteration }}</td>

        <!-- GAMBAR (AMAN TANPA GD) -->
        <td>
            @if($project->gambar)
                <img src="{{ url('properti/'.$project->gambar) }}" class="img">
            @else
                <span style="font-size:10px;">No Image</span>
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
```

</table>

<!-- FOOTER -->

<div class="footer">
    © {{ date('Y') }} NATURAL LAND PROPERTY | All Rights Reserved
</div>

</body>
</html>

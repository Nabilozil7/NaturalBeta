<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Properti NATURAL</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
            color: #333;
        }

        /* ===== KOP SURAT ===== */
        .kop {
            width: 100%;
            border-bottom: 2px solid #198754;
            margin-bottom: 15px;
        }

        .kop table {
            width: 100%;
        }

        .logo {
            width: 70px;
        }

        .judul {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #198754;
        }

        .subjudul {
            text-align: center;
            font-size: 11px;
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
        }

        td {
            border: 1px solid #ddd;
            padding: 6px;
            font-size: 11px;
        }

        /* zebra */
        tr:nth-child(even) {
            background: #f8f9fa;
        }

        /* gambar */
        .img {
            width: 60px;
            height: 40px;
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
</head>

<body>

<!-- KOP SURAT -->
<div class="kop">
    <table>
        <tr>
            <td style="width: 15%;">
                <img src="{{ public_path('gambar/logo.png') }}" class="logo">
            </td>

            <td style="width: 85%;">
                <div class="judul">LAPORAN DATA PROPERTI</div>
                <div class="subjudul">
                    NATURAL LAND PROPERTY - Sistem Informasi Manajemen Properti
                </div>
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

            <!-- GAMBAR -->
            <td>
                @if($project->gambar && file_exists(public_path('properti/'.$project->gambar)))
                    <img src="{{ public_path('properti/'.$project->gambar) }}" class="img">
                @else
                    <span style="font-size:10px;">No Image</span>
                @endif
            </td>

            <td>{{ $project->nama_pemilik }}</td>
            <td>{{ $project->jenis }}</td>
            <td>{{ $project->lokasi }}</td>
            <td>Rp {{ number_format($project->harga) }}</td>
            <td>{{ $project->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- FOOTER -->
<div class="footer">
    © {{ date('Y') }} NATURAL PROPERTY | All Rights Reserved
</div>

</body>
</html>
@extends('admin.template')

@section('content')

<div class="container-fluid">

    <h3 class="mb-4">Dashboard Admin</h3>

    <!-- Statistik Utama -->
    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card border-0 shadow bg-primary text-white">
                <div class="card-body text-center">
                    <h6>Total Properti</h6>
                    <h2>{{ $properti }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow bg-success text-white">
                <div class="card-body text-center">
                    <h6>Total Artikel</h6>
                    <h2>{{ $artikel }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow bg-warning text-dark">
                <div class="card-body text-center">
                    <h6>Total User</h6>
                    <h2>{{ $user }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Status Properti -->
    <div class="card shadow mb-4">
        <div class="card-header bg-success text-white">
            Status Properti
        </div>

        <div class="card-body">

           @foreach($statusData as $status => $total)

    @php
        $persen = $properti > 0 ? ($total / $properti) * 100 : 0;

        $warna = match(strtolower($status)) {
            'available' => 'success',      // hijau
            'acquisition' => 'primary',    // biru
            'booking' => 'info',           // biru muda
            'negotiation' => 'warning',    // kuning
            'sold' => 'danger',            // merah
            default => 'secondary'         // abu-abu
        };
    @endphp

    <div class="mb-3">
        <div class="d-flex justify-content-between mb-1">
            <strong>{{ ucfirst($status) }}</strong>
            <span>{{ $total }}</span>
        </div>

        <div class="progress" style="height:25px;">
            <div class="progress-bar bg-{{ $warna }}"
                 style="width: {{ $persen }}%">
                {{ round($persen) }}%
            </div>
        </div>
    </div>

@endforeach

        </div>
    </div>

    <!-- Jenis Properti -->
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white">
            Jenis Properti
        </div>

        <div class="card-body">

            <div class="row">

                @foreach($jenisData as $jenis => $total)

                <div class="col-md-4 mb-3">
                    <div class="border rounded p-3 text-center">
                        <h6>{{ ucfirst($jenis) }}</h6>
                        <h3 class="text-primary">{{ $total }}</h3>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </div>

    <!-- User & Role -->
    <div class="card shadow">
        <div class="card-header bg-warning">
            User & Role
        </div>

        <div class="card-body">

            <div class="row">

                @foreach($roleData as $role => $total)

                <div class="col-md-4">
                    <div class="border rounded p-3 text-center">
                        <h6>{{ ucfirst($role) }}</h6>
                        <h3>{{ $total }}</h3>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </div>

</div>

@endsection
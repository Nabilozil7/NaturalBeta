<?php

namespace Database\Seeders;


use App\Models\properti;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seederproperti extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        properti::insert([

                [
        'nama_pemilik' => 'PT Golden Property',
        'jenis' => 'Lahan Komersial',
        'lokasi' => 'PIK 2, Tangerang',
        'luas_m2' => 7500,
        'status' => 'Available',
        'harga' => 35000000000,
        'gambar' => 'Lahan Komersial.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Bumi Sentosa',
        'jenis' => 'Lahan Industri',
        'lokasi' => 'Cikupa, Tangerang',
        'luas_m2' => 18000,
        'status' => 'Negotiation',
        'harga' => 28000000000,
        'gambar' => 'Lahan Industri.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Maju Bersama',
        'jenis' => 'Tanah Kavling',
        'lokasi' => 'BSD City, Tangerang Selatan',
        'luas_m2' => 2500,
        'status' => 'Booked',
        'harga' => 8500000000,
        'gambar' => 'Tanah Kavling.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Nusantara Land',
        'jenis' => 'Lahan Perkebunan',
        'lokasi' => 'Pandeglang, Banten',
        'luas_m2' => 30000,
        'status' => 'Acquisition',
        'harga' => 22000000000,
        'gambar' => 'Lahan Perkebunan.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Citra Properti',
        'jenis' => 'Lahan Komersial',
        'lokasi' => 'Alam Sutera, Tangerang Selatan',
        'luas_m2' => 6000,
        'status' => 'Available',
        'harga' => 26000000000,
        'gambar' => 'Lahan Komersial.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [

            'nama_pemilik' => 'Adi Santoso',
            'jenis' => 'Ruko',
            'lokasi' => 'BSD, Tangerang Selatan',
            'luas_m2' => 150,
            'status' => 'Sold',
            'harga' => 3000000000,
            'gambar' => 'Ruko.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Samat',
            'jenis' => 'Tanah Kosong',
            'lokasi' => 'Pekayon, Tangerang',
            'luas_m2' => 1947,
            'status' => 'Sold',
            'harga' => 400000000,
            'gambar' => 'Tanah Kosong.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Damanhuri',
            'jenis' => 'Lahan Pertanian',
            'lokasi' => 'Pakuhaji, Tangerang',
            'luas_m2' => 2500,
            'status' => 'Sold',
            'harga' => 730000000,
            'gambar' => 'Lahan Pertanian.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Meliana',
            'jenis' => 'Ruko',
            'lokasi' => 'Karawaci, Tangerang',
            'luas_m2' => 100,
            'status' => 'Sold',
            'harga' => 2000000000,
            'gambar' => 'Ruko.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Robbi',
            'jenis' => 'Ruko',
            'lokasi' => 'Serpong, Tangerang Selatan',
            'luas_m2' => 90,
            'status' => 'Sold',
            'harga' => 1500000000,
            'gambar' => 'Ruko.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'H. Arifin',
            'jenis' => 'Rumah',
            'lokasi' => 'Serpong, Tangerang Selatan',
            'luas_m2' => 600,
            'status' => 'Available',
            'harga' => 500000000,
            'gambar' => 'Rumah.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Sarmuji',
            'jenis' => 'Rumah',
            'lokasi' => 'Gunung Sindur, Bogor',
            'luas_m2' => 500,
            'status' => 'Available',
            'harga' => 450000000,
            'gambar' => 'Rumah.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Zaini',
            'jenis' => 'Rumah',
            'lokasi' => 'Tangerang',
            'luas_m2' => 1200,
            'status' => 'Negotiation',
            'harga' => 1300000000,
            'gambar' => 'Rumah.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Bani',
            'jenis' => 'Lahan Pertanian',
            'lokasi' => 'Kadu, Tangerang',
            'luas_m2' => 2300,
            'status' => 'Negotiation',
            'harga' => 635000000,
            'gambar' => 'Lahan Pertanian.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Taufik',
            'jenis' => 'Tanah Kosong',
            'lokasi' => 'Mauk, Tangerang',
            'luas_m2' => 5300,
            'status' => 'Sold',
            'harga' => 1420000000,
            'gambar' => 'Tanah Kosong.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Tarmidi',
            'jenis' => 'Tanah Kosong',
            'lokasi' => 'Sukadiri, Tangerang',
            'luas_m2' => 1100,
            'status' => 'Acquisition',
            'harga' => 420000000,
            'gambar' => 'Tanah Kosong.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Rahmawati',
            'jenis' => 'Lahan Pertanian',
            'lokasi' => 'Sukadiri, Tangerang',
            'luas_m2' => 3000,
            'status' => 'Negotiation',
            'harga' => 750000000,
            'gambar' => 'Lahan Pertanian.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Rahmat',
            'jenis' => 'Lahan Pertanian',
            'lokasi' => 'Balaraja, Tangerang',
            'luas_m2' => 2300,
            'status' => 'Sold',
            'harga' => 480000000,
            'gambar' => 'Lahan Pertanian.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Saepulloh',
            'jenis' => 'Ruko',
            'lokasi' => 'Serang, Banten',
            'luas_m2' => 200,
            'status' => 'Negotiation',
            'harga' => 1500000000,
            'gambar' => 'Ruko.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'nama_pemilik' => 'Nurdin',
            'jenis' => 'Lahan Pertanian',
            'lokasi' => 'Mauk, Tangerang',
            'luas_m2' => 5300,
            'status' => 'Sold',
            'harga' => 1100000000,
            'gambar' => 'Lahan Pertanian.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],

        [
        'nama_pemilik' => 'PT Graha Nusantara',
        'jenis' => 'Lahan Industri',
        'lokasi' => 'Cikupa, Tangerang',
        'luas_m2' => 12000,
        'status' => 'Available',
        'harga' => 18500000000,
        'gambar' => 'Lahan Industri.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Sinar Properti',
        'jenis' => 'Lahan Komersial',
        'lokasi' => 'Gading Serpong',
        'luas_m2' => 5000,
        'status' => 'Negotiation',
        'harga' => 22000000000,
        'gambar' => 'Lahan Komersial.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'H. Ahmad Fauzi',
        'jenis' => 'Tanah Kosong',
        'lokasi' => 'BSD City',
        'luas_m2' => 3500,
        'status' => 'Acquisition',
        'harga' => 9800000000,
        'gambar' => 'Tanah Kosong.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'CV Maju Jaya',
        'jenis' => 'Lahan Perkebunan',
        'lokasi' => 'Bogor',
        'luas_m2' => 15000,
        'status' => 'Available',
        'harga' => 12500000000,
        'gambar' => 'Lahan Perkebunan.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Karya Mandiri',
        'jenis' => 'Lahan Pertanian',
        'lokasi' => 'Pamulang',
        'luas_m2' => 1800,
        'status' => 'Sold',
        'harga' => 3200000000,
        'gambar' => 'Lahan Pertanian.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Mitra Land',
        'jenis' => 'Lahan Industri',
        'lokasi' => 'Balaraja',
        'luas_m2' => 10000,
        'status' => 'Available',
        'harga' => 14500000000,
        'gambar' => 'Lahan Industri.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'Dedi Supriyadi',
        'jenis' => 'Tanah Kosong',
        'lokasi' => 'Serpong',
        'luas_m2' => 2500,
        'status' => 'Booked',
        'harga' => 4500000000,
        'gambar' => 'Tanah Kosong.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Alam Sentosa',
        'jenis' => 'Lahan Komersial',
        'lokasi' => 'Alam Sutera',
        'luas_m2' => 4200,
        'status' => 'Negotiation',
        'harga' => 17000000000,
        'gambar' => 'Lahan Komersial.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'PT Berkah Properti',
        'jenis' => 'Lahan Industri',
        'lokasi' => 'Cikande',
        'luas_m2' => 13500,
        'status' => 'Available',
        'harga' => 21000000000,
        'gambar' => 'Lahan Industri.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        [
        'nama_pemilik' => 'Slamet Riyadi',
        'jenis' => 'Lahan Pertanian',
        'lokasi' => 'Cisauk',
        'luas_m2' => 1500,
        'status' => 'Booked',
        'harga' => 2700000000,
        'gambar' => 'Lahan Pertanian.jpg',
        'created_at' => now(),
        'updated_at' => now(),
        ],

        
        ]);

    }
}
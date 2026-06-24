<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyProfile;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        CompanyProfile::create([
            'nama_perusahaan' => 'Natural Land & Property',

            'tentang' => 'Natural Land & Property merupakan perusahaan yang bergerak di bidang pengadaan tanah, pengelolaan aset, dan pengembangan properti. Perusahaan berkomitmen menyediakan lahan dan properti yang memiliki legalitas jelas, bernilai investasi tinggi, serta mendukung kebutuhan pembangunan yang berkelanjutan. Dengan mengedepankan profesionalisme, transparansi, dan integritas, Natural Land & Property berupaya menjadi mitra terpercaya bagi masyarakat, investor, maupun pelaku usaha.',

            'visi' => 'Menjadi perusahaan pengadaan tanah, pengelolaan aset, dan pengembangan properti yang terpercaya, profesional, serta berkontribusi dalam pembangunan berkelanjutan.',

            'misi' => 'Melaksanakan pengadaan tanah dan pengelolaan aset secara profesional, transparan, dan sesuai peraturan yang berlaku.
            Menyediakan lahan, properti, dan aset yang memiliki legalitas jelas serta memberikan nilai investasi yang berkelanjutan.
            Mengembangkan kawasan hunian, komersial, dan investasi yang berkualitas untuk mendukung pertumbuhan wilayah.
            Membangun hubungan kerja sama yang terpercaya dengan pemilik lahan, investor, pelanggan, dan mitra bisnis.
            Menerapkan tata kelola perusahaan yang akuntabel, berintegritas, dan berorientasi pada kepuasan pelanggan.',

            'alamat' => 'Tangerang, Banten, Indonesia',

            'telepon' => '(021) 12345678',

            'email' => 'info@naturallandproperty.com',

            'website' => 'www.natural.com'
        ]);
    }
}
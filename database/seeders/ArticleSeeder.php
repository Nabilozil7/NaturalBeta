<?php

namespace Database\Seeders;

use App\Models\Article; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 
        Article::insert([

            [
                'title' => 'Tips Investasi Properti untuk Pemula',
                'content' => 'Investasi properti merupakan salah satu bentuk investasi jangka panjang yang paling aman dan stabil dibandingkan instrumen lainnya. Bagi pemula, langkah pertama yang harus dipahami adalah menentukan tujuan investasi, apakah untuk dijual kembali (capital gain) atau disewakan (passive income). Selain itu, pemilihan lokasi menjadi faktor utama yang sangat menentukan nilai properti di masa depan. Lokasi yang dekat dengan pusat kota, akses transportasi, sekolah, rumah sakit, dan kawasan bisnis memiliki potensi kenaikan harga yang lebih tinggi. Investor juga perlu memahami risiko seperti likuiditas yang rendah dan biaya perawatan properti yang tidak sedikit. Oleh karena itu, perencanaan yang matang sangat diperlukan sebelum memulai investasi.',
                'image' => 'artikel1.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Cara Memilih Lokasi Tanah yang Strategis',
                'content' => 'Lokasi merupakan faktor paling penting dalam dunia properti karena menentukan nilai dan potensi perkembangan aset di masa depan. Tanah yang berada di kawasan strategis seperti dekat jalan utama, pusat perdagangan, kawasan industri, atau area yang sedang berkembang biasanya memiliki kenaikan nilai yang signifikan. Selain itu, faktor infrastruktur seperti pembangunan jalan tol, transportasi umum, dan fasilitas publik juga sangat mempengaruhi harga tanah. Sebelum membeli tanah, penting untuk melakukan survei langsung ke lokasi, memeriksa lingkungan sekitar, serta memastikan tidak ada risiko banjir atau masalah akses jalan. Analisis yang tepat akan membantu menghindari kerugian investasi di kemudian hari.',
                'image' => 'artikel2.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Tips Membeli Tanah Agar Tidak Rugi',
                'content' => 'Membeli tanah membutuhkan kehati-hatian karena ini adalah investasi bernilai besar. Langkah pertama yang wajib dilakukan adalah mengecek legalitas tanah, seperti Sertifikat Hak Milik (SHM) atau Hak Guna Bangunan (HGB). Pastikan tidak ada sengketa atau masalah hukum yang melekat pada tanah tersebut. Selain itu, perhatikan juga kondisi fisik tanah, termasuk akses jalan, lingkungan sekitar, dan potensi pengembangan wilayah. Banyak kasus kerugian terjadi karena pembeli tergesa-gesa tanpa melakukan pengecekan menyeluruh. Oleh karena itu, disarankan untuk selalu melakukan pengecekan ke kantor pertanahan dan berkonsultasi dengan pihak yang berpengalaman sebelum membeli.',
                'image' => 'artikel3.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Investasi Tanah Jangka Panjang',
                'content' => 'Tanah merupakan salah satu aset investasi yang nilainya hampir selalu mengalami kenaikan dari waktu ke waktu. Hal ini disebabkan oleh keterbatasan lahan dan meningkatnya kebutuhan manusia akibat pertumbuhan penduduk serta pembangunan infrastruktur. Investasi tanah sangat cocok untuk jangka panjang karena tidak memberikan keuntungan instan, tetapi memiliki potensi keuntungan besar di masa depan. Banyak investor besar menjadikan tanah sebagai aset utama dalam portofolio mereka karena dianggap aman dari inflasi. Namun, investor tetap harus memperhatikan lokasi dan legalitas agar investasi berjalan optimal.',
                'image' => 'artikel4.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Pentingnya Legalitas dalam Properti',
                'content' => 'Legalitas adalah aspek paling krusial dalam dunia properti karena berkaitan langsung dengan keamanan hukum kepemilikan aset. Dokumen seperti Sertifikat Hak Milik (SHM), Hak Guna Bangunan (HGB), dan IMB harus dipastikan keasliannya sebelum melakukan transaksi. Tanpa legalitas yang jelas, properti berpotensi menimbulkan sengketa di kemudian hari. Oleh karena itu, pembeli wajib melakukan pengecekan di Badan Pertanahan Nasional (BPN) untuk memastikan status tanah. Legalitas yang lengkap tidak hanya memberikan keamanan, tetapi juga meningkatkan nilai jual properti.',
                'image' => 'artikel5.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Kelebihan Investasi Properti',
                'content' => 'Investasi properti memiliki banyak kelebihan dibandingkan instrumen investasi lainnya. Salah satunya adalah kenaikan nilai aset yang cenderung stabil dan terus meningkat dari waktu ke waktu. Selain itu, properti juga dapat menghasilkan pendapatan pasif melalui penyewaan rumah, ruko, atau lahan. Properti juga merupakan aset nyata yang memiliki bentuk fisik sehingga lebih aman dibandingkan investasi digital atau saham yang bersifat fluktuatif. Dengan pengelolaan yang tepat, properti dapat menjadi sumber kekayaan jangka panjang yang sangat menguntungkan.',
                'image' => 'artikel6.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Perbedaan Tanah, Rumah, dan Ruko',
                'content' => 'Dalam dunia properti, terdapat beberapa jenis aset seperti tanah, rumah, dan ruko yang memiliki fungsi berbeda. Tanah biasanya digunakan sebagai investasi jangka panjang karena nilainya terus meningkat. Rumah berfungsi sebagai tempat tinggal dan juga bisa menjadi aset investasi. Sedangkan ruko digunakan untuk kegiatan bisnis atau usaha komersial. Setiap jenis properti memiliki kelebihan dan kekurangan masing-masing, sehingga pemilihan harus disesuaikan dengan tujuan investasi atau kebutuhan pengguna.',
                'image' => 'artikel7.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Risiko dalam Investasi Properti',
                'content' => 'Meskipun investasi properti tergolong aman, tetap ada beberapa risiko yang harus diperhatikan. Risiko tersebut antara lain lokasi yang tidak berkembang, masalah legalitas, hingga kesulitan menjual kembali properti dalam waktu singkat. Selain itu, biaya perawatan dan pajak juga perlu diperhitungkan dalam investasi jangka panjang. Oleh karena itu, analisis yang mendalam sangat diperlukan sebelum memutuskan untuk membeli properti agar terhindar dari kerugian.',
                'image' => 'artikel8.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Cara Menentukan Harga Properti',
                'content' => 'Harga properti tidak ditentukan secara sembarangan, melainkan berdasarkan beberapa faktor penting seperti lokasi, luas tanah, akses jalan, dan perkembangan infrastruktur di sekitar area tersebut. Semakin strategis lokasi properti, maka semakin tinggi pula nilainya. Selain itu, kondisi bangunan dan permintaan pasar juga mempengaruhi harga jual. Analisis pasar sangat penting agar harga yang ditetapkan sesuai dengan nilai sebenarnya.',
                'image' => 'artikel9.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Masa Depan Investasi Properti di Indonesia',
                'content' => 'Investasi properti di Indonesia memiliki prospek yang sangat cerah di masa depan. Hal ini didukung oleh pertumbuhan penduduk yang terus meningkat serta pembangunan infrastruktur yang masif di berbagai daerah. Permintaan terhadap hunian, lahan, dan bangunan komersial juga terus bertambah setiap tahunnya. Dengan kondisi ini, sektor properti menjadi salah satu pilihan investasi yang sangat menjanjikan untuk jangka panjang.',
                'image' => 'artikel10.jpg',
                'author' => 'Natural Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}






 

<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Post::create([
            'title' => 'AI di Kehidupan Sehari-hari',
            'content' => 'Kecerdasan buatan kini banyak digunakan, mulai dari aplikasi ponsel, kamera, hingga layanan online. AI membantu mempercepat pekerjaan dan mempermudah aktivitas. Review: Artikel ringan, cocok untuk pembaca pemula.',
            'category' => 'Tech', 
        ]);
        Post::create([
            'title' => 'Tren Smartphone Lipat',
            'content' => 'Ponsel lipat mulai diminati karena desain fleksibel dan layar lebih luas. Namun, harganya masih cukup tinggi.',
            'category' => 'Tech', 
        ]);
        Post::create([
            'title' => 'Laptop Tipis untuk Mahasiswa',
            'content' => 'Banyak produsen merilis laptop tipis dengan baterai tahan lama. Perangkat ini sangat membantu untuk belajar dan mobilitas.',
            'category' => 'Tech', 
        ]);
        Post::create([
            'title' => 'Cloud Storage Makin Populer',
            'content' => 'Layanan penyimpanan cloud memudahkan pengguna menyimpan file tanpa khawatir ruang habis. Keamanan juga terus ditingkatkan.',
            'category' => 'Tech', 
        ]);
        Post::create([
            'title' => 'Internet Cepat 5G',
            'content' => 'Jaringan 5G memberi kecepatan tinggi untuk streaming dan gaming. Namun, jangkauan masih terbatas di beberapa wilayah.',
            'category' => 'Tech', 
        ]);


        Post::create([
            'title' => 'Sepak Bola di Akhir Pekan',
            'content' => 'Sepak bola menjadi olahraga favorit banyak orang saat akhir pekan. Selain menyehatkan, juga mempererat pertemanan.',
            'category' => 'Sport', 
        ]);
        Post::create([
            'title' => 'Basket Populer di Sekolah',
            'content' => 'Banyak sekolah menyediakan lapangan basket sebagai fasilitas utama. Olahraga ini melatih kekompakan dan kecepatan.',
            'category' => 'Sport', 
        ]);
        Post::create([
            'title' => 'Jogging di Pagi Hari',
            'content' => 'Jogging jadi olahraga murah dan menyehatkan. Cukup sepatu olahraga, bisa dilakukan di mana saja.',
            'category' => 'Sport', 
        ]);
        Post::create([
            'title' => 'Bersepeda Ramah Lingkungan',
            'content' => 'Bersepeda bukan hanya olahraga, tapi juga transportasi ramah lingkungan. Banyak komunitas gowes bermunculan di kota besar.',
            'category' => 'Sport', 
        ]);
        Post::create([
            'title' => 'Renang untuk Kesehatan',
            'content' => 'Renang melatih hampir semua otot tubuh dan baik untuk pernapasan. Cocok untuk segala usia.',
            'category' => 'Sport', 
        ]);
    }
}

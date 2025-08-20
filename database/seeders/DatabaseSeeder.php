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
            'title' => 'Perkembangan AI dalam Kehidupan Sehari-hari Modern',
            'content' => 'Kecerdasan buatan (AI) saat ini semakin mudah ditemui dalam aktivitas harian. Mulai dari aplikasi ponsel pintar, kamera dengan fitur pengenalan wajah, hingga layanan online yang memprediksi kebutuhan pengguna. Teknologi ini tidak hanya mempercepat pekerjaan, tetapi juga memberikan kenyamanan lebih dalam berbagai bidang. AI membantu menyarankan musik, menampilkan iklan relevan, bahkan mendeteksi penyakit lebih cepat. Artikel ini cocok untuk pembaca pemula yang ingin memahami manfaat AI dalam hidup modern.',
            'category' => 'Tech',
        ]);

        Post::create([
            'title' => 'Tren Smartphone Lipat dengan Desain Fleksibel Masa Kini',
            'content' => 'Smartphone lipat menjadi salah satu tren menarik di industri teknologi. Dengan desain fleksibel, pengguna bisa menikmati layar lebih luas untuk multitasking atau hiburan. Walaupun harganya masih tergolong mahal, minat masyarakat mulai meningkat. Beberapa produsen besar pun berlomba merilis produk lipat dengan fitur canggih seperti ketahanan lipatan, kamera beresolusi tinggi, serta dukungan 5G. Seiring waktu, harga kemungkinan akan semakin terjangkau sehingga lebih banyak orang dapat merasakan pengalaman baru dari smartphone lipat.',
            'category' => 'Tech',
        ]);

        Post::create([
            'title' => 'Laptop Tipis dan Ringan yang Cocok untuk Para Mahasiswa',
            'content' => 'Laptop tipis semakin diminati, terutama oleh mahasiswa yang membutuhkan perangkat ringkas dengan daya tahan baterai lama. Produsen teknologi menghadirkan berbagai pilihan laptop dengan performa tinggi, layar jernih, serta bobot ringan sehingga mudah dibawa ke kampus atau bekerja di luar rumah. Selain itu, laptop tipis biasanya sudah dilengkapi dengan fitur keamanan modern seperti sidik jari dan webcam shutter. Dengan kelebihan ini, laptop tipis menjadi solusi ideal untuk menunjang aktivitas belajar, riset, dan hiburan sehari-hari mahasiswa.',
            'category' => 'Tech',
        ]);

        Post::create([
            'title' => 'Cloud Storage Menjadi Pilihan Penyimpanan Populer Masa Kini',
            'content' => 'Penyimpanan berbasis cloud semakin populer karena memberi keleluasaan bagi pengguna untuk menyimpan data tanpa takut kehabisan ruang. File dapat diakses dari berbagai perangkat hanya dengan koneksi internet. Layanan cloud juga memberikan opsi berbagi data secara cepat kepada teman atau rekan kerja. Keamanan menjadi perhatian utama, sehingga penyedia layanan terus meningkatkan enkripsi dan perlindungan akun. Dengan perkembangan teknologi, cloud storage kini menjadi solusi penyimpanan yang praktis, efisien, serta lebih ramah pengguna di era digital modern.',
            'category' => 'Tech',
        ]);

        Post::create([
            'title' => 'Jaringan Internet 5G Membawa Kecepatan dan Inovasi Baru',
            'content' => 'Teknologi jaringan 5G menghadirkan kecepatan internet yang jauh lebih tinggi dibandingkan generasi sebelumnya. Hal ini memberikan pengalaman baru untuk aktivitas digital seperti streaming video berkualitas tinggi, bermain game online tanpa lag, serta mendukung teknologi Internet of Things (IoT). Namun, penyebaran jaringan 5G masih terbatas pada wilayah tertentu. Seiring waktu, cakupan 5G akan semakin meluas dan membantu mendorong inovasi baru di bidang transportasi, kesehatan, hingga smart city. Masa depan digital akan semakin cepat, praktis, dan terhubung.',
            'category' => 'Tech',
        ]);

        Post::create([
            'title' => 'Sepak Bola Jadi Pilihan Olahraga Favorit di Akhir Pekan',
            'content' => 'Sepak bola sudah lama menjadi olahraga paling populer di dunia, termasuk di Indonesia. Banyak orang menjadikan sepak bola sebagai kegiatan rutin saat akhir pekan. Selain menyehatkan, olahraga ini juga mempererat pertemanan karena dimainkan secara berkelompok. Pertandingan antar kampung hingga liga profesional selalu menarik perhatian penonton. Selain itu, sepak bola juga mengajarkan nilai kerjasama, strategi, dan sportivitas. Tak heran jika olahraga ini terus digemari berbagai kalangan, mulai dari anak-anak hingga orang dewasa.',
            'category' => 'Sport',
        ]);

        Post::create([
            'title' => 'Basket Jadi Olahraga Populer di Kalangan Anak Sekolah',
            'content' => 'Basket adalah olahraga yang semakin populer di lingkungan sekolah. Hampir setiap sekolah kini memiliki lapangan basket dan tim yang rutin berlatih. Olahraga ini melatih kekompakan, kecepatan, serta daya tahan tubuh. Selain itu, basket juga memberikan manfaat mental seperti meningkatkan konsentrasi dan rasa percaya diri. Banyak kompetisi antar sekolah digelar untuk menumbuhkan bakat pemain muda. Dengan perkembangan komunitas basket di berbagai daerah, olahraga ini menjadi salah satu pilihan favorit di kalangan pelajar.',
            'category' => 'Sport',
        ]);

        Post::create([
            'title' => 'Jogging di Pagi Hari Jadi Olahraga Murah dan Menyehatkan',
            'content' => 'Jogging merupakan olahraga sederhana yang bisa dilakukan siapa saja tanpa membutuhkan peralatan khusus. Cukup dengan sepatu olahraga, seseorang bisa mulai berlari kecil di taman, jalanan, atau lingkungan sekitar rumah. Jogging di pagi hari bermanfaat meningkatkan kesehatan jantung, memperbaiki sirkulasi darah, dan meningkatkan energi untuk memulai aktivitas harian. Selain itu, udara segar di pagi hari membuat tubuh lebih rileks dan pikiran lebih tenang. Kebiasaan ini sangat dianjurkan agar tetap bugar dan sehat setiap hari.',
            'category' => 'Sport',
        ]);

        Post::create([
            'title' => 'Bersepeda Jadi Gaya Hidup Sehat dan Transportasi Ramah Lingkungan',
            'content' => 'Bersepeda tidak hanya menjadi aktivitas olahraga, tetapi juga gaya hidup sehat sekaligus transportasi ramah lingkungan. Dengan bersepeda, tubuh tetap bugar sekaligus mengurangi polusi udara. Banyak kota besar kini mendukung tren ini dengan membangun jalur sepeda dan mengadakan acara gowes bersama. Selain itu, komunitas sepeda semakin berkembang sehingga menambah keseruan bagi para penggemar. Dengan manfaat kesehatan dan kontribusi positif terhadap lingkungan, bersepeda adalah pilihan tepat untuk masyarakat modern.',
            'category' => 'Sport',
        ]);

        Post::create([
            'title' => 'Renang Jadi Olahraga Lengkap untuk Kesehatan Tubuh dan Pikiran',
            'content' => 'Renang adalah olahraga yang melatih hampir seluruh otot tubuh sekaligus memperkuat pernapasan. Aktivitas ini bisa dilakukan oleh semua kalangan usia, mulai dari anak-anak hingga orang tua. Selain menyehatkan, renang juga dapat membantu mengurangi stres dan meningkatkan kebugaran mental. Banyak dokter merekomendasikan renang bagi pasien dengan masalah persendian karena olahraga ini minim risiko cedera. Dengan berbagai manfaatnya, renang tetap menjadi salah satu pilihan olahraga terbaik sepanjang masa.',
            'category' => 'Sport',
        ]);
    }
}

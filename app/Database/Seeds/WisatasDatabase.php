<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

// Kelas WisatasDatabase adalah seeder yang digunakan untuk mengisi tabel database dengan data awal.
class WisatasDatabase extends Seeder
{
    public function run()
    {
        // Menghubungkan ke database menggunakan konfigurasi default CodeIgniter.
        $db = \Config\Database::connect();

        // Data yang akan dimasukkan ke dalam tabel database.
        $data = [
            [
                'name' => 'Pulau Sebuku',
                'picture' => 'https://pict.sindonews.net/webp/732/pena/news/2023/01/16/156/997351/intip-keindahan-pulau-sebuku-daratan-tak-berpenghuni-di-lampung-yang-jadi-destinasi-wisata-faz.webp',
                'description' => 'Pulau Sebuku adalah pulau terbesar di Selat Sunda dan secara administratif termasuk dalam wilayah Provinsi Lampung. Pulau ini terletak di antara Pulau Sumatra dan Pulau Sebesi, serta dekat dengan Gunung Krakatau. Pulau Sebuku memiliki ekosistem laut yang kaya, dengan terumbu karang dan keanekaragaman hayati yang tinggi. Pulau ini juga memiliki pantai yang indah dan sering menjadi tujuan wisata bahari bagi para penyelam dan pecinta alam.',
                'location' => 'Lampung Selatan',
                'interesting' => 'Spot Memancing yang Bagus, Keindahan Bawah Laut, Dekat dengan Gunung Krakatau',
                'maps' => 'https://maps.google.com/maps?q=Sebuku+Island&z=12&output=embed',
            ],
            [
                'name' => 'Pantai Tanjung Setia',
                'picture' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/bb/6a/8e/ujung-bocur.jpg?w=900&h=-1&s=1',
                'description' => 'Pantai Tanjung Setia terletak di Kabupaten Lampung Barat, Provinsi Lampung. Pantai ini berada di pesisir barat Pulau Sumatra, menghadap langsung ke Samudra Hindia. Keindahan alamnya yang masih alami, ombak yang menantang, serta suasana yang tenang menjadikannya salah satu destinasi wisata favorit di Lampung, terutama bagi para peselancar.',
                'location' => 'Lampung Barat',
                'interesting' => 'Surga bagi Peselancar, Spot Snorkeling dan Diving, Wisata Memancing',
                'maps' => 'https://maps.google.com/maps?q=Pantai+Tanjung+Setia&z=12&output=embed',
            ],
            [
                'name' => 'Teluk Kiluan',
                'picture' => 'https://heartline.co.id/wp-content/uploads/2024/09/Melihat-Dari-Dekat-Lumba-Lumba-Di-Teluk-Kiluan-Lampung.jpg',
                'description' => 'Teluk Kiluan adalah salah satu destinasi wisata alam paling terkenal di Lampung. Terletak di Kabupaten Tanggamus, sekitar 80 km dari Bandar Lampung, teluk ini menawarkan pesona alam yang masih asri, pantai berpasir putih, serta perairan yang jernih. Namun, daya tarik utama Teluk Kiluan adalah keberadaan lumba-lumba liar yang sering muncul di perairannya.',
                'location' => 'Tanggamus',
                'interesting' => 'Melihat Lumba-lumba di Habitat Asli, Laguna Kiluan – Kolam Alami Berwarna Biru Tosca, Memancing di Laut Lepas',
                'maps' => 'https://maps.google.com/maps?q=Teluk+Kiluan&z=14&output=embed',
            ],
            [
                'name' => 'Taman Nasional Way Kambas',
                'picture' => 'https://www.blibli.com/friends-backend/wp-content/uploads/2023/08/B800790-1-Jungle-Tracking-dan-Safari-Susur-Sungai-1024x538.jpg',
                'description' => 'Taman Nasional Way Kambas (TNWK) adalah salah satu taman nasional tertua di Indonesia yang terletak di Kabupaten Lampung Timur, Provinsi Lampung. Kawasan ini terkenal sebagai tempat konservasi gajah sumatra dan berbagai satwa liar lainnya. Way Kambas memiliki luas sekitar 1.300 km² dan terdiri dari hutan hujan tropis dataran rendah, rawa-rawa, serta padang rumput yang menjadi habitat berbagai flora dan fauna langka.',
                'location' => 'Lampung Timur',
                'interesting' => 'Pusat Konservasi Gajah Sumatra, Jelajah Hutan dan Ekowisata, Keanekaragaman Satwa Liar',
                'maps' => 'https://maps.google.com/maps?q=Taman+Nasional+Way+Kambas&z=10&output=embed',
            ],
            [
                'name' => 'Danau Ranau',
                'picture' => 'https://asset.kompas.com/crops/ziVzdiLv8XtrizxZB9ngle6nUm8=/0x72:1000x738/1200x800/data/photo/2022/06/08/62a0972858cb1.jpg',
                'description' => 'Danau Ranau adalah danau terbesar di Pulau Sumatra setelah Danau Toba. Danau ini terletak di perbatasan Kabupaten Lampung Barat, Provinsi Lampung dan Kabupaten Ogan Komering Ulu Selatan, Provinsi Sumatra Selatan. Dikelilingi oleh perbukitan hijau dan berlatar belakang Gunung Seminung, Danau Ranau menawarkan keindahan alam yang luar biasa dan udara yang sejuk.',
                'location' => 'Lampung Barat',
                'interesting' => 'Dikelilingi oleh Perbukitan Hijau,Wisata Perahu Keliling Danau, Camping dan Penginapan Bernuansa Alam',
                'maps' => 'https://maps.google.com/maps?q=Danau+Ranau&z=11&output=embed',
            ],
            [
                'name' => 'Air Terjun Putri Malu',
                'picture' => 'http://yopiefranz.com/wp-content/uploads/2016/08/Air-Terjun-Putri-Malu-di-kab-Way-Kanan-Yopie-Pangkey.jpg',
                'description' => 'Air Terjun Putri Malu adalah salah satu air terjun paling indah di Provinsi Lampung. Terletak di Kampung Juku Batu, Kecamatan Banjit, Kabupaten Way Kanan, air terjun ini memiliki ketinggian sekitar 80 meter dengan aliran air yang jernih dan segar. Nama "Putri Malu" berasal dari bentuk aliran airnya yang melengkung, seolah-olah malu dan membungkuk ke bawah.',
                'location' => 'Way Kanan',
                'interesting' => 'Dikelilingi oleh Hutan Tropis, Trekking Menembus Hutan, Camping dan Wisata Petualangan',
                'maps' => 'https://maps.google.com/maps?q=Putri+Malu+Waterfall&z=12&output=embed',
            ],
            [
                'name' => 'Pantai Gigi Hiu',
                'picture' => 'https://www.batiqa.com/upload/news/z/lampung-pantai-gigi-hiu_3mnwt.jpg',
                'description' => 'Pantai Gigi Hiu, yang juga dikenal sebagai Batu Layar, adalah salah satu pantai paling unik dan eksotis di Lampung. Terletak di Pekon (Desa) Pegadungan, Kecamatan Kelumbayan, Kabupaten Tanggamus, pantai ini terkenal bukan karena pasir putihnya, melainkan karena deretan batu karang raksasa yang menjulang tajam seperti gigi hiu. Formasi batuan ini menciptakan pemandangan dramatis yang sangat Instagramable dan sering menjadi spot favorit bagi fotografer landscape.',
                'location' => 'Tanggamus',
                'interesting' => 'Formasi Batu Karang yang Unik, Ombak Besar dan Lautan Biru, Spot Fotografi yang Luar Biasa',
                'maps' => 'https://maps.google.com/maps?q=Sharks+Teeth+Beach&z=12&output=embed',
            ],
            [
                'name' => 'Kawah Keramikan Suoh',
                'picture' => 'https://rakyatbenteng.bacakoran.co/upload/eec4b9e93554503c37e025abad86a20a.jpg',
                'description' => 'Kawah Keramikan adalah salah satu kawah unik yang terletak di Suoh, Kabupaten Lampung Barat, Provinsi Lampung. Kawah ini merupakan bagian dari kompleks Geotermal Suoh, yang terdiri dari beberapa kawah aktif seperti Kawah Nirwana, Danau Asam, Danau Lebar, dan Danau Minyak. Nama "Keramikan" berasal dari warna tanah dan endapan belerang di sekitar kawah yang terlihat seperti keramik putih mengkilap.',
                'location' => 'Lampung Barat',
                'interesting' => 'Fenomena Geotermal yang Langka, Pemandian Air Panas Alami, Danau Geotermal dengan Warna Eksotis',
                'maps' => 'https://maps.google.com/maps?q=Wisata+Panas+Bumi+Kawah+Keramikan&z=12&output=embed',
            ],
            [
                'name' => 'Pantai Marina',
                'picture' => 'https://www.eviindrawanto.com/wp-content/uploads/2021/11/Pantai-Marina-Lampug-seksi.jpg',
                'description' => 'Pantai Marina adalah salah satu pantai eksotis yang terletak di Kabupaten Pesawaran, Provinsi Lampung. Pantai ini terkenal dengan pasir putihnya yang lembut, air laut yang jernih, serta panorama alam yang masih alami. Dikelilingi oleh perbukitan hijau dan pepohonan rindang, Pantai Marina menjadi tempat yang cocok untuk bersantai atau berlibur bersama keluarga dan teman.',
                'location' => 'Lampung Selatan',
                'interesting' => 'Pasir Putih dan Air Laut Jernih, Suasana yang Tenang dan Asri , Bersantai dan Bermain di Tepi Pantai',
                'maps' => 'https://maps.google.com/maps?q=pantai+marina+kalianda+lampung&z=12&output=embed',
            ],
            [
                'name' => 'Lampung Marriott Resort & Spa',
                'picture' => 'https://sender.co.id/uploads/post_photo_1730637113.jpg',
                'description' => 'Lampung Marriott Resort & Spa adalah resor bintang lima yang terletak di Desa Hurun, Kabupaten Pesawaran, Lampung. Resor ini menawarkan pemandangan laut yang indah, suasana tenang, serta fasilitas mewah yang cocok untuk liburan maupun perjalanan bisnis. Dengan akses langsung ke Pantai Hurun sepanjang 1.500 meter, resor ini menjadi destinasi eksklusif bagi wisatawan yang mencari ketenangan dan kemewahan.',
                'location' => 'Pesawaran',
                'interesting' => ' Akomodasi Mewah dengan Pemandangan Laut, Restoran Eksklusif dengan Kuliner Berkualitas, Kolam Renang Infinity Menghadap Laut',
                'maps' => 'https://maps.google.com/maps?q=Lampung+Marriott+Resort+%26+Spa&z=12&output=embed',
            ],
            [
                'name' => 'Danau Biru',
                'picture' => 'https://asset-2.tstatic.net/lampung/foto/bank/images/danau-biru-lampung-tengah_20180809_145038.jpg',
                'description' => 'Danau Biru adalah destinasi wisata tersembunyi di Lampung Tengah, yang dikenal karena warna airnya yang biru jernih. Danau ini sebenarnya merupakan bekas galian tambang yang berubah menjadi danau alami setelah terisi air hujan dan mata air. Keindahan warna airnya yang biru kehijauan, dikelilingi oleh tebing-tebing batu kapur putih, menciptakan pemandangan yang eksotis dan menarik bagi wisatawan.',
                'location' => 'Lampung Tengah',
                'interesting' => 'Air Berwarna Biru yang Unik, Tebing Kapur yang Indah, Suasana Tenang dan Asri',
                'maps' => null,
            ],
            [
                'name' => 'Pulau Pahawang',
                'picture' => 'https://asset.kompas.com/crops/PpxXaa6PusHwMxS2FQm-meIHl1Y=/0x83:1000x750/1200x800/data/photo/2020/02/27/5e57c7cce9c99.jpg',
                'description' => 'Pulau Pahawang adalah salah satu destinasi wisata bahari terbaik di Kabupaten Pesawaran, Lampung. Pulau ini terkenal dengan pasir putihnya yang lembut, air laut yang jernih, serta terumbu karang yang indah. Pulau Pahawang terbagi menjadi dua bagian, yaitu Pahawang Besar dan Pahawang Kecil, dengan berbagai spot snorkeling yang memukau.',
                'location' => 'Pesawaran',
                'interesting' => 'Snorkeling dan Diving di Terumbu Karang Indah, Jembatan Pasir (Pasir Timbul) yang Unik, Wisata Pulau Hopping',
                'maps' => 'https://maps.google.com/maps?q=Pahawang+Island&z=12&output=embed',
            ],
       
        ]; 

        // Menyisipkan banyak data ke dalam tabel 'wisatas' menggunakan metode insertBatch.
        $db->table('wisatas')->insertBatch($data);
        // Mengambil ID dari data terakhir yang dimasukkan ke dalam tabel 'wisatas'.
        $wisatasId = $db->insertID();
    }
}

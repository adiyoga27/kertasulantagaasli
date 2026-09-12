<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@kertasulantagaasli.com'],
            ['name' => 'Admin Ulantaga', 'password' => 'ulantaga123']
        );

        $artikel = Category::firstOrCreate(
            ['slug' => 'artikel'],
            ['name' => 'Artikel', 'description' => 'Artikel seputar kertas Ulantaga, daluang, dan budaya Bali.']
        );
        $ukuran = Category::firstOrCreate(
            ['slug' => 'ukuran-kertas'],
            ['name' => 'Ukuran Kertas Ulantaga', 'description' => 'Panduan ukuran kertas Ulantaga asli.']
        );

        Product::firstOrCreate(
            ['name' => 'Kertas Ulantaga 25 x 140 cm'],
            [
                'size' => '25 x 140 cm',
                'price' => 'Hubungi WhatsApp',
                'description' => 'Kertas Ulantaga asli Nusantara yang disucikan, cocok untuk kegiatan agama, menulis riwayat / lontar, dan kegiatan seni. Bahan daluang pilihan, tekstur kuat dan tahan lama.',
                'marketplace_shopee' => 'https://shopee.co.id/',
                'marketplace_tokopedia' => 'https://www.tokopedia.com/',
                'marketplace_lazada' => 'https://www.lazada.co.id/',
                'is_available' => true,
                'sort_order' => 1,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'Kertas Ulantaga Custom / Lembaran'],
            [
                'size' => 'Custom',
                'price' => 'Hubungi WhatsApp',
                'description' => 'Lembaran kertas daluang asli untuk kerajinan tangan, kaligrafi, naskah, penelitian, hingga koleksi bersejarah.',
                'is_available' => true,
                'sort_order' => 2,
            ]
        );

        $posts = [
            [
                'title' => 'Kertas ULANTAGA Suci Bali Kuno',
                'slug' => 'kertas-ulantaga-suci-bali-kuno',
                'excerpt' => 'Ulan Taga atau Ulantaga adalah sejenis kertas Bali kuna yang disucikan untuk upacara dan penulisan lontar.',
                'body' => "Kertas ULANTAGA Suci Bali Kuno\n\nUlan Taga atau Ulantaga adalah sejenis kertas Bali kuna yang dibuat dari kulit kayu daluang (Broussonetia papyrifera). Sejak zaman kerajaan, kertas ini digunakan untuk menulis riwayat, usada, wariga, dan sastra suci.\n\nBerbeda dengan kertas modern, Ulantaga diproses manual: kulit kayu direndam, dipukul, dijemur, lalu disucikan. Hasilnya kuat, berserat alami, dan dipercaya membawa taksu.\n\nPenggunaan utama:\n- Sarana upacara agama Hindu Bali\n- Media penulisan lontar / prasasti modern\n- Kerajinan tangan dan seni lukis\n- Koleksi naskah dan penelitian budaya\n\nKertas Ulantaga Asli – Melestarikan Warisan, Menyediakan Kualitas.",
                'is_featured' => true,
                'views' => 26,
            ],
            [
                'title' => 'Mengenal Pohon Daluang (Broussonetia papyrifera) Bahan Kertas Ulantaga',
                'slug' => 'mengenal-pohon-daluang-bahan-kertas-ulantaga',
                'excerpt' => 'Pohon daluang adalah bahan utama kertas Ulantaga. Kenali ciri, habitat, dan prosesnya menjadi kertas suci.',
                'body' => "Mengenal Pohon Daluang (Broussonetia papyrifera)\n\nPohon daluang, atau dikenal juga sebagai Broussonetia papyrifera, adalah tumbuhan dari keluarga Moraceae. Kulit kayunya berserat panjang dan kuat, ideal untuk kertas tradisional Asia – di Jawa disebut daluang, di Bali disebut Ulantaga, di Jepang mirip kozo untuk washi.\n\nCiri-ciri:\n- Daun lebar berlekuk, berbulu halus\n- Tumbuh cepat di dataran rendah hingga menengah\n- Kulit mudah dikelupas dan kaya serat\n\nProses menjadi kertas:\n1. Kupas kulit kayu, rendam dan bersihkan\n2. Rebus dengan abu / kapur alami\n3. Tumbuk / pukul hingga menjadi bubur serat\n4. Cetak lembaran, jemur matahari\n5. Sucikan untuk keperluan upacara\n\nDengan membeli Ulantaga asli, Anda ikut melestarikan pohon daluang dan pengrajin lokal.",
                'is_featured' => false,
                'views' => 20,
            ],
        ];

        foreach ($posts as $post) {
            Article::firstOrCreate(
                ['slug' => $post['slug']],
                [
                    'category_id' => $artikel->id,
                    'user_id' => $admin->id,
                    'title' => $post['title'],
                    'excerpt' => $post['excerpt'],
                    'body' => $post['body'],
                    'is_featured' => $post['is_featured'],
                    'is_published' => true,
                    'published_at' => now(),
                    'views' => $post['views'],
                ]
            );
        }
    }
}

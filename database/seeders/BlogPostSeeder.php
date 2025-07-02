<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            [
                'title' => 'Panduan Lengkap Pengembangan Web Modern',
                'excerpt' => 'Pelajari teknologi terbaru dalam pengembangan web modern termasuk framework dan tools yang paling populer.',
                'content' => 'Dalam era digital saat ini, pengembangan web modern memerlukan pemahaman mendalam tentang berbagai teknologi...',
                'category' => 'Technology',
                'author' => 'Tim Amins Project',
                'reading_time' => 8,
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Tips Optimasi Database untuk Performa Maksimal',
                'excerpt' => 'Strategi dan teknik optimasi database yang dapat meningkatkan performa aplikasi secara signifikan.',
                'content' => 'Database adalah jantung dari setiap aplikasi. Performa yang optimal sangat penting untuk user experience...',
                'category' => 'Tips',
                'author' => 'Database Expert',
                'reading_time' => 6,
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Keamanan Aplikasi Web: Best Practices',
                'excerpt' => 'Panduan komprehensif untuk mengamankan aplikasi web dari berbagai ancaman keamanan.',
                'content' => 'Keamanan aplikasi web adalah aspek yang tidak boleh diabaikan dalam pengembangan...',
                'category' => 'Security',
                'author' => 'Security Specialist',
                'reading_time' => 10,
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Implementasi AI dalam Sistem Informasi',
                'excerpt' => 'Bagaimana mengintegrasikan kecerdasan buatan untuk meningkatkan efisiensi sistem informasi.',
                'content' => 'Artificial Intelligence (AI) telah menjadi game changer dalam dunia teknologi informasi...',
                'category' => 'AI',
                'author' => 'AI Developer',
                'reading_time' => 12,
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(4),
            ],
            [
                'title' => 'Mobile App Development: Native vs Cross-Platform',
                'excerpt' => 'Perbandingan lengkap antara pengembangan aplikasi mobile native dan cross-platform.',
                'content' => 'Dalam memilih pendekatan pengembangan aplikasi mobile, developer sering dihadapkan pada pilihan...',
                'category' => 'Software',
                'author' => 'Mobile Developer',
                'reading_time' => 7,
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Cloud Computing: Solusi Infrastruktur Modern',
                'excerpt' => 'Manfaat dan implementasi cloud computing untuk infrastruktur IT perusahaan modern.',
                'content' => 'Cloud computing telah mengubah cara perusahaan mengelola infrastruktur IT mereka...',
                'category' => 'Technology',
                'author' => 'Cloud Architect',
                'reading_time' => 9,
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(6),
            ],
        ];

        foreach ($posts as $post) {
            $post['slug'] = Str::slug($post['title']);
            BlogPost::create($post);
        }
    }
}

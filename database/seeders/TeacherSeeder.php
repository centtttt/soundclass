<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'user_id' => '1',
            'bio' => 'John Williams adalah pianis profesional dengan pengalaman 10 tahun yang telah tampil di berbagai konser internasional. Dia mengajarkan teknik klasik dan membangun fondasi musik yang kuat.',
            'imageURL' => 'images/teacher1.jpg',
            'location' => 'New York, USA',
            'specialization' => 'Piano',
        ]);
        Teacher::create([
            'user_id' => '2',
            'bio' => 'Sarah Johnson adalah guru gitar dan ukulele dengan pendekatan pembelajaran yang menyenangkan dan interaktif. Spesialisasinya adalah untuk siswa pemula hingga menengah.',
            'imageURL' => 'images/teacher2.jpg',
            'location' => 'Los Angeles, USA',
            'specialization' => 'Guitar & Ukulele',
        ]);
        Teacher::create([
            'user_id' => '3',
            'bio' => 'Olivia Brown adalah pengajar biola berpengalaman dengan pendekatan pembelajaran yang menggabungkan teknik tradisional dan modern. Pengalaman mengajarnya telah berjalan selama 8 tahun.',
            'imageURL' => 'images/teacher3.jpg',
            'location' => 'London, UK',
            'specialization' => 'Violin',
        ]);
        Teacher::create([
            'user_id' => '4',
            'bio' => 'Emily Roberts adalah pelatih vokal yang membantu siswa meningkatkan kemampuan mereka melalui latihan pemanasan unik dan pilihan lagu yang disesuaikan.',
            'imageURL' => 'images/teacher4.jpg',
            'location' => 'Sydney, Australia',
            'specialization' => 'Vocal Training',
        ]);
        Teacher::create([
            'user_id' => '5',
            'bio' => 'Alex Martinez memiliki passion di bidang perkusi dan menawarkan pelajaran drum yang mencakup mulai dari rock hingga jazz.',
            'imageURL' => 'images/teacher5.jpg',
            'location' => 'Madrin, Spain',
            'specialization' => 'Drums',
        ]);
        Teacher::create([
            'user_id' => '6',
            'bio' => 'Lucas Hernandez adalah gitaris listrik dengan pengalaman lebih dari 12 tahun. Dia terkenal karena teknik-teknik solo yang luar biasa dan pendekatan modern dalam mengajar.',
            'imageURL' => 'images/teacher6.jpg',
            'location' => 'Seville, Spain',
            'specialization' => 'Electric Guitar',
        ]);
        Teacher::create([
            'user_id' => '7',
            'bio' => 'Naomi Lee mengkhususkan diri dalam mengajarkan piano jazz. Dia memiliki pengalaman 9 tahun mengajar dan tampil di berbagai festival jazz di Asia.',
            'imageURL' => 'images/teacher7.jpg',
            'location' => 'Tokyo, Japan',
            'specialization' => 'Jazz Piano',
        ]);
        Teacher::create([
            'user_id' => '8',
            'bio' => 'Michael Brown adalah pemain saksofon yang telah berkeliling dunia dengan band jazz ternama. Dia menawarkan pelajaran saksofon untuk semua level.',
            'imageURL' => 'images/teacher8.jpg',
            'location' => 'Chicago, USA',
            'specialization' => 'Saxophone',
        ]);
        Teacher::create([
            'user_id' => '9',
            'bio' => 'Aisha Khan adalah penyanyi profesional dengan latar belakang opera dan musik pop. Dia mengajar teknik vokal dengan pendekatan yang menggabungkan dua genre tersebut.',
            'imageURL' => 'images/teacher9.jpg',
            'location' => 'Mumbai, India',
            'specialization' => 'Vocal Training',
        ]);
        Teacher::create([
            'user_id' => '10',
            'bio' => 'Oliver Smith adalah pemain drum rock berpengalaman yang telah menjadi bagian dari beberapa band indie terkenal. Dia mengajar teknik drumming modern dan kreatif.',
            'imageURL' => 'images/teacher10.jpg',
            'location' => 'Melbourne, Australia',
            'specialization' => 'Rock Drumming',
        ]);
        Teacher::create([
            'user_id' => '11',
            'bio' => 'Andy is a content creator that passionate and dedicated acoustic guitar instructor with years of experience teaching students of all levels. Known for his engaging teaching style.',
            'imageURL' => 'images/andy.jpg',
            'location' => 'Yorkshire, England',
            'specialization' => 'Acoustic Guitar',
        ]);
    }
}

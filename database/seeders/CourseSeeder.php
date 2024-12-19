<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Acoustic Guitar Lessons for Beginner to Intermediate',
            'type' => 'Guitar',
            'description' => 'Pelajaran Gitar Akustik kami diperuntukkan bagi siswa dari tingkat pemula hingga menengah, yang menyediakan dasar yang kuat dalam memainkan gitar akustik.',
            'imageURL' => 'images/andyguitar.jpg',
            'total_lessons' => 6,
            'teacher_id' => '11',
        ]);
        Course::create([
            'title' => 'Beginner Piano Mastery',
            'type' => 'Piano',
            'description' => 'Kursus terstruktur untuk memperkenalkan dasar-dasar piano, latihan jari, dan lagu sederhana. Cocok untuk pemula!',
            'imageURL' => 'images/course1.jpg',
            'total_lessons' => 5,
            'teacher_id' => '1',
        ]);
        Course::create([
            'title' => 'Acoustic Guitar Basics',
            'type' => 'Guitar',
            'description' => 'Pelajari chord dasar, pola strumming, dan lagu populer dengan video tutorial langkah demi langkah.',
            'imageURL' => 'images/course2.jpeg',
            'total_lessons' => 10,
            'teacher_id' => '2',
        ]);
        Course::create([
            'title' => 'Violin Essentials for Intermediate Players',
            'type' => 'Violin',
            'description' => 'Kursus ini membantu siswa menyempurnakan teknik bowing mereka dan meningkatkan keterampilan interpretasi musik.',
            'imageURL' => 'images/course3.jpeg',
            'total_lessons' => 6,
            'teacher_id' => '3',
        ]);
        Course::create([
            'title' => 'Vocal Warm-Up & Singing Techniques',
            'type' => 'Vocal',
            'description' => 'Bangun kepercayaan diri dan rentang vokal dengan latihan yang disesuaikan untuk kebutuhanmu.',
            'imageURL' => 'images/course4.jpg',
            'total_lessons' => 5,
            'teacher_id' => '4',
        ]);
        Course::create([
            'title' => 'Drumming 101: Rock Beats',
            'type' => 'Drum',
            'description' => 'Pelajari dasar-dasar drumming dengan fokus pada beat dan fill rock. Cocok untuk calon drummer!',
            'imageURL' => 'images/course5.jpg',
            'total_lessons' => 8,
            'teacher_id' => '5',
        ]);
        Course::create([
            'title' => 'Electric Guitar Basics',
            'type' => 'Guitar',
            'description' => 'Kursus ini mengajarkan dasar-dasar bermain gitar listrik, termasuk teknik picking dan power chords.',
            'imageURL' => 'images/course6.jpeg',
            'total_lessons' => 9,
            'teacher_id' => '6',
        ]);
        Course::create([
            'title' => 'Jazz Piano Improvisation',
            'type' => 'Piano',
            'description' => 'Kursus ini dirancang untuk membantu siswa memahami dasar-dasar improvisasi dan chord progression dalam jazz.',
            'imageURL' => 'images/course7.jpeg',
            'total_lessons' => 3,
            'teacher_id' => '7',
        ]);
        Course::create([
            'title' => 'Saxophone for Beginners',
            'type' => 'Saxophone',
            'description' => 'Mulai perjalanan musikmu dengan pelajaran saksofon yang mencakup teknik dasar dan etude sederhana.',
            'imageURL' => 'images/course8.jpg',
            'total_lessons' => 11,
            'teacher_id' => '8',
        ]);
        Course::create([
            'title' => 'Operatic & Pop Vocal Techniques',
            'type' => 'Vocal',
            'description' => 'Kembangkan kemampuan vokalmu dengan latihan yang menggabungkan teknik opera dan pop untuk suara yang lebih kaya.',
            'imageURL' => 'images/course9.jpeg',
            'total_lessons' => 4,
            'teacher_id' => '9',
        ]);
        Course::create([
            'title' => 'Modern Rock Drumming',
            'type' => 'Drum',
            'description' => 'Pelajari pola drum modern dan teknik improvisasi yang digunakan dalam musik rock saat ini.',
            'imageURL' => 'images/course10.jpg',
            'total_lessons' => 7,
            'teacher_id' => '10',
        ]);
    }
}

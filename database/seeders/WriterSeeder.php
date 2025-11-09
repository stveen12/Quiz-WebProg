<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $writers = [
            [
                'name' => 'Raka Putra Wicaksono',
                'bio' => 'Specializes in Network Security',
                'photo_path' => 'images/profile/1.png',
            ],
            [
                'name' => 'Bea Mecca Annissa',
                'bio' => 'Specializes in Data Science',
                'photo_path' => 'images/profile/2.png',
            ],
            [
                'name' => 'Dina Mariana',
                'bio' => 'Expert in Cybersecurity',
                'photo_path' => 'images/profile/3.png',
            ],
            [
                'name' => 'Fajar Adi Pratama',
                'bio' => 'Expert in Data Science',
                'photo_path' => 'images/profile/4.png',
            ],
            [
                'name' => 'Siti Nurhaliza',
                'bio' => 'Network Security Specialist',
                'photo_path' => 'images/profile/5.png',
            ],
        ];

        foreach ($writers as $writer) {
            Writer::create($writer);
        }
    }
}

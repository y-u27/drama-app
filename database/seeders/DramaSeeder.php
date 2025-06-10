<?php

namespace Database\Seeders;

use App\Models\Drama;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //ダミーデータ
        Drama::create([
            'title' => '花より男子',
            'country' => '日本',
            'user_id' => 'y-u',
            'body' => '王道の学園ドラマ',
            'image_path' => 'storage/drama/スクリーンショット 2025-06-10 0.31.47.png',
        ]);
    }
}

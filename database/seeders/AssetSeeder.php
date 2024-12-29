<?php

namespace Database\Seeders;

use App\Models\Asset;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssetSeeder extends Seeder
{
    public function run(): void
    {
    

        Asset::create([

            'name' => 'Mouse',
            'status'=>1,

        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'rava',
                'email' => 'rava@gmail.com',
                'password' => Hash::make('rava111'),
                'no_hp' => '081311538438',
                'address' => 'bgr',
                'role_id' => 1,

            ],
            [
                'nama' => 'kietha',
                'email' => 'kietha@gmail.com',
                'password' => Hash::make('kietha111'),
                'no_hp' => '081311538438',
                'address' => 'bogor',
                'role_id' => 2,
            ]
        ]);
    }
}

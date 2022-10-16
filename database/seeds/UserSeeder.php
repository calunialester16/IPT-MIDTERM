<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Flores',
                'fname'=>'Rosalino',
                'address'=>'Pinayagan Sur, Tubigon, Bohol.',
                'phone'=>'0934564429',
                'email'=>'fross@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Aurestila',
                'fname'=>'Louie Jay',
                'address'=>'Cawayanan, Tubigon, Bohol.',
                'phone'=>'0936434459',
                'email'=>'louie.j@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Balili',
                'fname'=>'Louise Demean',
                'address'=>'Ilijan, Tubigon, Bohol.',
                'phone'=>'0935648394',
                'email'=>'dmean_louie@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Macabugto',
                'fname'=>'Acejoy M',
                'address'=>'Batasan, Tubigon, Bohol.',
                'phone'=>'093385936793',
                'email'=>'acejoym@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Dizon',
                'fname'=>'Ryzza Mae',
                'address'=>'Makati, Metro Manila.',
                'phone'=>'09359834594',
                'email'=>'rm_dizon@gmail.com',
                'password'=>bcrypt('password123')
            ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}

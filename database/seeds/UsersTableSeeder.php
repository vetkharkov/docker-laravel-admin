<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login'    => 'vetkharkov',
            'name'     => 'Виталий',
//            'lastname' => 'Биндюг',
            'email'    => 'bvpkharkov@gmail.com',
            'avatar'    => 'vet.jpg',
            'password' => bcrypt('secret'),
        ]);

        factory(App\Models\User::class, 20)->create();
    }
}

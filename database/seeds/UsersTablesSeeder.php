<?php

use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
         'name'    => 'John Smith',
         'email'    => 'john_smith@gmail.com',
         'password'   =>  Hash::make('password'),
     ]);
    }
}

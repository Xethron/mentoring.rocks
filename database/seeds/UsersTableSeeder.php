<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'Bernhard',
            'surname' => 'Breytenbach',
            'password' => Hash::make('asdf1234'),
            'email' => 'bernhard@coffeecode.co.za',
            'bio' => 'This is me...',
        ]);

        factory(\App\User::class, 15)->create();
    }
}

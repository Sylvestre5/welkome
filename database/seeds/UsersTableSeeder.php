<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Welkome',
            'email' => 'root@welkome.com',
            'password' => bcrypt('root'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
        ]);

        User::create([
            'name' => 'Manager',
            'email' => 'manager@welkome.com',
            'password' => bcrypt('manager'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
        ]);

        User::create([
            'name' => 'Recepcionista',
            'email' => 'recep@welkome.com',
            'password' => bcrypt('recep'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'parent' => 2
        ]);
    }
}

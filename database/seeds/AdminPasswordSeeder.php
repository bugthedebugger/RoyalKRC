<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminPasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::beginTransaction();
        try {
            User::create([
                'name' => 'RoyalKRC User',
                'email' => 'admin@admin.com',
                'password' => bcrypt(env('ADMIN_PASSWORD')),
            ]);
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            echo $e->getMessage();
        }
    }
}

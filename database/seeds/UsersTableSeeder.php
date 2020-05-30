<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $user=new User();
        $admin=Role::find(1);
        $user->assignRole($admin);
        User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'address'=>'Kathmandu',
            'is_admin'=>'1',
            'phone'=>9848807422,
            'created_at' => now(),
            'updated_at' => now()
        ],);
    }
}

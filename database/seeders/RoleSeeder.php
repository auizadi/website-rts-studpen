<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //create role
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'instruktur']);
        Role::create(['name' => 'siswa']);

        // create user credential
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin1234'),
        ]);

        $instruktur = User::create([
            'name' => 'dani',
            'email' => 'dani@mail.com',
            'password' => bcrypt('dani1234'),
        ]);

        $siswa = User::create([
            'name' => 'andi',
            'email' => 'andi@mail.com',
            'password' => bcrypt('andi1234'),
        ]);

        $siswa2 = User::create([
            'name' => 'ahmad',
            'email' => 'ahmad@mail.com',
            'password' => bcrypt('ahmad1234'),
        ]);

        // assign role to every user
        $admin->assignRole('admin');
        $instruktur->assignRole('instruktur');
        $siswa->assignRole('siswa');
        $siswa2->assignRole('siswa');
    }
}

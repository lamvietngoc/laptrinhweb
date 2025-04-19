<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert roles
        DB::table('roles')->insert([
            ['name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'manager', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'leader', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'member', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Tạo một người dùng mới
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        // Lấy role admin từ bảng roles
        $adminRole = Role::where('name', 'admin')->first();

        // Gán role admin cho người dùng
        $user->roles()->attach($adminRole);
    }
}

<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'Jaybie Batonginog',
                'email'      => 'jaybie.student@gmail.com',
                'password'   => password_hash('password123', PASSWORD_DEFAULT),
                'role'       => 'student',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Prof. Bas kij',
                'email'      => 'bas.instructor@gmail.com',
                'password'   => password_hash('password123', PASSWORD_DEFAULT),
                'role'       => 'instructor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'System Admin',
                'email'      => 'admin@example.com',
                'password'   => password_hash('password123', PASSWORD_DEFAULT),
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
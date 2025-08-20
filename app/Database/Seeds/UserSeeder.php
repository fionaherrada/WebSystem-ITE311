<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Sample user data
        $data = [
            [
                'username' => 'student1',
                'password' => password_hash('password1', PASSWORD_DEFAULT), // Hashing the password
                'email' => 'student1@example.com',
            ],
            [
                'username' => 'instructor1',
                'password' => password_hash('password2', PASSWORD_DEFAULT),
                'email' => 'instructor1@example.com',
            ],
            [
                'username' => 'admin1',
                'password' => password_hash('adminpassword', PASSWORD_DEFAULT),
                'email' => 'admin1@example.com',
            ],
            // Add more sample users as needed
        ];

        // Insert the sample data into the users table
        $this->db->table('users')->insertBatch($data);
    }
}

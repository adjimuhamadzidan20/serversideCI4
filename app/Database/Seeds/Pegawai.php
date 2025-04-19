<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pegawai extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 25000; $i++) { 
             $data = [
                'id' => '',
                'nama_lengkap' => $faker->name(),
                'jenis_kelamin' => $faker->randomElement(['Pria', 'Wanita']),
                'alamat' => $faker->address(),
                'jabatan' => $faker->randomElement(['Driver', 'Supervisor', 'Operator', 'HRD', 'Manager', 'Leader']),
                'tahun_masuk' => $faker->randomElement(['2000', '2012', '1996', '1999'])
            ];

            // Using Query Builder
            $this->db->table('tb_pegawai')->insert($data);
        }
    }
}

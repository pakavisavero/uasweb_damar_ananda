<?php
namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
            ["14560", "Doni Aras", "Departemen IT", "IT Manager"],
            ["14560", "Tiara Andini", "Warehouse", "Warehouse Staff"],
            ["14560", "Rumaisha Khuwailid", "Dept. Product", "Product Engineer"],
            ["14560", "Agung Hapsah", "Dept. Sales", "Sales Affiliater"],
            ["14560", "Kylian Bernardi", "Marketing", "Marketing Staff"],
          ];

        foreach ($karyawan as $k) {
              Karyawan::create([
                  "nik" => $k[0],
                  "nama" => $k[1],
                  "departemen" => $k[2],
                  "jabatan" => $k[3],
              ]
            );
        }
    }
}
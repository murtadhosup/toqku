<?php

namespace Database\Factories;

use App\Models\Santri;
use Illuminate\Database\Eloquent\Factories\Factory;

class SantriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Santri::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender =$this->faker->randomElement(['Laki-Laki', 'Perempuan']);
        $status_aktif =$this->faker->randomElement(['Aktif', 'Non-Aktif']);
        return [
            'nama_santri' => $this->faker->name,
            'gender' => $gender,
            'tgl_lahir' =>$this->faker->dateTimeBetween('-30 months', 'now')->format('Y-m-d'),
            'kota_lahir'=>$this->faker->city,
            'nama_ortu' =>$this->faker->name,
            'alamat_ortu'=>$this->faker->address,
            'hp'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'tgl_masuk' =>$this->faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
            'aktif'=>$status_aktif
        ];
    }
}

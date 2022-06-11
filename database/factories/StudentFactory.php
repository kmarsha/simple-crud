<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->unique()->numberBetween(12007000, 12009000),
            'nama' => $this->faker->unique()->name(),
            'rombel' => $this->faker->randomElement(['RPL', 'TKJ', 'MMD', 'BDP', 'HTL', 'TBG', 'OTKP']),
            'rayon' => $this->faker->randomElement(['Ciawi', 'Cibedug', 'Cicurug', 'Cisarua', 'Sukasari', 'Tajur']),
            'ket' => $this->faker->randomElement(['Hadir', 'Sakit', 'Izin', 'Alpa']),
        ];
    }
}

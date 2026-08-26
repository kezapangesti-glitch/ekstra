<?php

namespace Database\Factories;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ekstrakurikuler>
 */
class EkstrakurikulerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->randomElement(['Pramuka','Paskibra','Futsal','Tari', 'PMR']),
            'pembina'=>fake()->name(),
            'jadwal'=>fake()->randomElement(['Senin','Selasa','Rabu']),
            'deskripsi'=>fake()->paragraph(),
        ];
    }
}
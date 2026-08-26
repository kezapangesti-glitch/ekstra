<?php

namespace Database\Factories;

use App\Models\Siswa;
use App\Models\Ekstrakurikuler;
use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'siswa_id'=>Siswa::factory(),
            'eskul_id'=>Ekstrakurikuler::factory(),
            'alasan_mengikuti'=>fake()->sentence(),
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> User::factory(),
            'name'=> fake()->name(),
            'telp'=> fake()->phoneNumber(),
            'kelas' => fake()->randomElement([
                //RPL (3ROMBEL)
                'X RPL 1',
                'X RPL 2',
                'X RPL 3',
                'XI RPL 1',
                'XI RPL 2',
                'XI RPL 3',
                'XII RPL 1',
                'XII RPL 2',
                'XII RPL 3',
                //PM
                'X PM 1',
                'X PM 2',
                'X PM 3',
                'XI BD 1',
                'XI BD 2',
                'XI BR ',
                'XII BD 1',
                'XII BD 2',
                'XII BR',
                //FKK
                'X FARMASI 1',
                'X FARMASI 2',
                'XI FARMASI',
                'XII FKK',
                //TSM
                'X TO 1',
                'X TO 2',
                'X TO 3',
                'X TO 4',
                'XI TSM 1',
                'XI TSM 2',
                'XI TSM 3',
                'XI TSM 4',
                'XII TSM 1',
                'XII TSM 2',
                'XII TSM 3',
                'XII TSM 4',

            ]),
        ];
    }
}
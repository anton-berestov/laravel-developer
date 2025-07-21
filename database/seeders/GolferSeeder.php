<?php

namespace Database\Seeders;

use App\Models\Golfer;
use Illuminate\Database\Seeder;

class GolferSeeder extends Seeder
{
    public function run(): void
    {
        $start = (Golfer::max('debitor_account') ?? 0) + 1;

        Golfer::factory()
            ->count(100)
            ->sequence(fn ($sequence) => [
                'debitor_account' => $start + $sequence->index,
            ])
            ->create();
    }
}

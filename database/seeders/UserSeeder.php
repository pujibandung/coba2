<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

/**
 * Run the database seeders.
 *
 * @return void
 */
public function run()
{
    User::factory()
            ->times(50)
            ->hasPosts(1)
            ->create();
}
?>
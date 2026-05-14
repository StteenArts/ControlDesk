<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('report_issue')->insert([
            [
                'desktop_id' => 1,
                'technical_id' => 1,
                'title' => 'Computer not turning on',
                'description' => 'The computer does not power on when the power button is pressed.',
                'priority' => 'high',
                'status' => 'open',
            ],
            [
                'desktop_id' => 2,
                'technical_id' => 2,
                'title' => 'Software installation issue',
                'description' => 'Unable to install the required software for work.',
                'priority' => 'medium',
                'status' => 'open',
            ],
            [
                'desktop_id' => 3,
                'technical_id' => null,
                'title' => 'Network connectivity problem',
                'description' => 'The computer is unable to connect to the network.',
                'priority' => 'high',
                'status' => 'open',
            ],
        ]);
    }
}

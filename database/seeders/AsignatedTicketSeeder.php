<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignatedTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('assignated_ticket')->insert([
            [
                'id' => 1,
                'ticket_id' => 1,
                'technical_id' => 1,
                'assigned_date' => now(),
                'returned_date' => null,
                'status' => 'assigned',
            ],
            [
                'id' => 2,
                'ticket_id' => 2,
                'technical_id' => 2,
                'assigned_date' => now()->subDays(-7),
                'returned_date' => null,
                'status' => 'assigned',
            ],
        ]);
    }
}

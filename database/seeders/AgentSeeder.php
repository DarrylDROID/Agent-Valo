<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agent')->insert([
            'agent_id' => 1,
            'agent_name' => 'Fade',
            'agent_description' => 'Turkish bounty hunter Fade unleashes the power of raw nightmare to seize enemy secrets. Attuned with terror itself, she hunts down targets and reveals their deepest fears - before crushing them in the dark.',
            'agent_role' => 'Initiator',
            'agent_skill_1' => 'Seize',
            'agent_skill_2' => 'Haunt',
            'agent_skill_3' => 'Prowler',
            'agent_skill_4' => 'Nightfall',
            'agent_image' => 'https://media.valorant-api.com/agents/dade69b4-4f5a-8528-247b-219e5a1facd6/fullportrait.png',
        ]);
    }
}

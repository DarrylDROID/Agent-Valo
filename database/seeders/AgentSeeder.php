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
        DB::table('agent')->insert([
            'agent_id' => 2,
            'agent_name' => 'Breach',
            'agent_description' => 'The bionic Swede Breach fires powerful, targeted kinetic blasts to aggressively clear a path through enemy ground. The damage and disruption he inflicts ensures no fight is ever fair.',
            'agent_role' => 'Initiator',
            'agent_skill_1' => 'Flashpoint',
            'agent_skill_2' => 'Fault Line',
            'agent_skill_3' => 'Aftershock',
            'agent_skill_4' => 'Rolling Thunder',
            'agent_image' => 'https://media.valorant-api.com/agents/5f8d3a7f-467b-97f3-062c-13acf203c006/fullportrait.png',
        ]);
        DB::table('agent')->insert([
            'agent_id' => 3,
            'agent_name' => 'Raze',
            'agent_description' => 'Raze explodes out of Brazil with her big personality and big guns. With her blunt-force-trauma playstyle, she excels at flushing entrenched enemies and clearing tight spaces with a generous dose of \"boom\".',
            'agent_role' => 'Duelist',
            'agent_skill_1' => 'Blast Pack',
            'agent_skill_2' => 'Paint Shells',
            'agent_skill_3' => 'Boom Bot',
            'agent_skill_4' => 'Showstopper',
            'agent_image' => 'https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/fullportrait.png',
        ]);
        DB::table('agent')->insert([
            'agent_id' => 4,
            'agent_name' => 'Chamber',
            'agent_description' => 'Well dressed and well armed, French weapons designer Chamber expels aggressors with deadly precision. He leverages his custom arsenal to hold the line and pick off enemies from afar, with a contingency built for every plan.',
            'agent_role' => 'Sentinel',
            'agent_skill_1' => 'Rendezvous',
            'agent_skill_2' => 'Trademark',
            'agent_skill_3' => 'Headhunter',
            'agent_skill_4' => 'Tour De Force',
            'agent_image' => 'https://media.valorant-api.com/agents/22697a3d-45bf-8dd7-4fec-84a9e28c69d7/fullportrait.png',
        ]);
    }
}

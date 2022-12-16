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
        //FADE
        DB::table('agent')->insert([
            'agent_id' => 1,
            'agent_name' => 'Fade',
            'agent_description' => "Turkish bounty hunter Fade unleashes the power of raw nightmare to seize enemy secrets. Attuned with terror itself, she hunts down targets and reveals their deepest fears - before crushing them in the dark.",
            'agent_role' => 'Initiator',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/1b47567f-8f7b-444b-aae3-b0c634622d10/displayicon.png',
            'agent_skill_1' => 'Seize',
            'agent_skill_2' => 'Haunt',
            'agent_skill_3' => 'Prowler',
            'agent_skill_4' => 'Nightfall',
            'agent_image' => 'https://media.valorant-api.com/agents/dade69b4-4f5a-8528-247b-219e5a1facd6/fullportrait.png',
        ]);
        //BREACH
        DB::table('agent')->insert([
            'agent_id' => 2,
            'agent_name' => 'Breach',
            'agent_description' => "The bionic Swede Breach fires powerful, targeted kinetic blasts to aggressively clear a path through enemy ground. The damage and disruption he inflicts ensures no fight is ever fair.",
            'agent_role' => 'Initiator',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/1b47567f-8f7b-444b-aae3-b0c634622d10/displayicon.png',
            'agent_skill_1' => 'Flashpoint',
            'agent_skill_2' => 'Fault Line',
            'agent_skill_3' => 'Aftershock',
            'agent_skill_4' => 'Rolling Thunder',
            'agent_image' => 'https://media.valorant-api.com/agents/5f8d3a7f-467b-97f3-062c-13acf203c006/fullportrait.png',
        ]);
        //RAZE
        DB::table('agent')->insert([
            'agent_id' => 3,
            'agent_name' => 'Raze',
            'agent_description' => "Raze explodes out of Brazil with her big personality and big guns. With her blunt-force-trauma playstyle, she excels at flushing entrenched enemies and clearing tight spaces with a generous dose of \"boom\".",
            'agent_role' => 'Duelist',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/dbe8757e-9e92-4ed4-b39f-9dfc589691d4/displayicon.png',
            'agent_skill_1' => 'Blast Pack',
            'agent_skill_2' => 'Paint Shells',
            'agent_skill_3' => 'Boom Bot',
            'agent_skill_4' => 'Showstopper',
            'agent_image' => 'https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/fullportrait.png',
        ]);
        //CHAMBER
        DB::table('agent')->insert([
            'agent_id' => 4,
            'agent_name' => 'Chamber',
            'agent_description' => "Well dressed and well armed, French weapons designer Chamber expels aggressors with deadly precision. He leverages his custom arsenal to hold the line and pick off enemies from afar, with a contingency built for every plan.",
            'agent_role' => 'Sentinel',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/5fc02f99-4091-4486-a531-98459a3e95e9/displayicon.png',
            'agent_skill_1' => 'Rendezvous',
            'agent_skill_2' => 'Trademark',
            'agent_skill_3' => 'Headhunter',
            'agent_skill_4' => 'Tour De Force',
            'agent_image' => 'https://media.valorant-api.com/agents/22697a3d-45bf-8dd7-4fec-84a9e28c69d7/fullportrait.png',
        ]);
        //PHOENIX
        DB::table('agent')->insert([
            'agent_id' => 5,
            'agent_name' => 'Phoenix',
            'agent_description' => "Hailing from the U.K., Phoenix's star power shines through in his fighting style, igniting the battlefield with flash and flare. Whether he's got backup or not, he's rushing in to fight on his own terms.",
            'agent_role' => 'Duelist',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/dbe8757e-9e92-4ed4-b39f-9dfc589691d4/displayicon.png',
            'agent_skill_1' => 'Curveball',
            'agent_skill_2' => 'Hot Hands',
            'agent_skill_3' => 'Blaze',
            'agent_skill_4' => 'Run it Back',
            'agent_image' => 'https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/fullportrait.png',
        ]);
        //HARBOR
        DB::table('agent')->insert([
            'agent_id' => 6,
            'agent_name' => 'Harbor',
            'agent_description' => "Hailing from India’s coast, Harbor storms the field wielding ancient technology with dominion over water. He unleashes frothing rapids and crushing waves to shield his allies and to pummel those that oppose him.",
            'agent_role' => 'Controller',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/4ee40330-ecdd-4f2f-98a8-eb1243428373/displayicon.png',
            'agent_skill_1' => 'High Tide',
            'agent_skill_2' => 'Cove',
            'agent_skill_3' => 'Cascade',
            'agent_skill_4' => 'Reckoning',
            'agent_image' => 'https://media.valorant-api.com/agents/95b78ed7-4637-86d9-7e41-71ba8c293152/fullportrait.png',
        ]);
        //BRIMSTONE
        DB::table('agent')->insert([
            'agent_id' => 7,
            'agent_name' => 'Brimstone',
            'agent_description' => "Joining from the USA, Brimstone's orbital arsenal ensures his squad always has the advantage. His ability to deliver utility precisely and from a distance makes him an unmatched boots-on-the-ground commander.",
            'agent_role' => 'Controller',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/4ee40330-ecdd-4f2f-98a8-eb1243428373/displayicon.png',
            'agent_skill_1' => 'Incendiary',
            'agent_skill_2' => 'Sky Smoke',
            'agent_skill_3' => 'Stim Beacon',
            'agent_skill_4' => 'Orbital Strike',
            'agent_image' => 'https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/fullportrait.png',
        ]);
        //SAGE
        DB::table('agent')->insert([
            'agent_id' => 8,
            'agent_name' => 'Sage',
            'agent_description' => "The stronghold of China, Sage creates safety for herself and her team wherever she goes. Able to revive fallen friends and stave off aggressive pushes, she provides a calm center to a hellish fight.",
            'agent_role' => 'Sentinel',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/5fc02f99-4091-4486-a531-98459a3e95e9/displayicon.png',
            'agent_skill_1' => 'Slow Orb',
            'agent_skill_2' => 'Healing Orb',
            'agent_skill_3' => 'Barrier Orb',
            'agent_skill_4' => 'Resurrection',
            'agent_image' => 'https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/fullportrait.png',
        ]);
        //SOVA
        DB::table('agent')->insert([
            'agent_id' => 9,
            'agent_name' => 'Sova',
            'agent_description' => "Born from the eternal winter of Russia's tundra, Sova tracks, finds, and eliminates enemies with ruthless efficiency and precision. His custom bow and incredible scouting abilities ensure that even if you run, you cannot hide.",
            'agent_role' => 'Initiator',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/1b47567f-8f7b-444b-aae3-b0c634622d10/displayicon.png',
            'agent_skill_1' => 'Shock Bolt',
            'agent_skill_2' => 'Recon Bolt',
            'agent_skill_3' => 'Owl Drone',
            'agent_skill_4' => 'Hunter’s Fury',
            'agent_image' => 'https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/fullportrait.png',
        ]);
        //VIPER
        DB::table('agent')->insert([
            'agent_id' => 10,
            'agent_name' => 'Viper',
            'agent_description' => "The American chemist, Viper deploys an array of poisonous chemical devices to control the battlefield and cripple the enemy's vision. If the toxins don't kill her prey, her mind games surely will.",
            'agent_role' => 'Controller',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/4ee40330-ecdd-4f2f-98a8-eb1243428373/displayicon.png',
            'agent_skill_1' => 'Poison Cloud',
            'agent_skill_2' => 'Toxic Screen',
            'agent_skill_3' => 'Snake Bite',
            'agent_skill_4' => 'Viper’s Pit',
            'agent_image' => 'https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/fullportrait.png',
        ]);
        //SKYE
        DB::table('agent')->insert([
            'agent_id' => 11,
            'agent_name' => 'Skye',
            'agent_description' => "Hailing from Australia, Skye and her band of beasts trail-blaze the way through hostile territory. With her creations hampering the enemy, and her power to heal others, the team is strongest and safest by Skye’s side.",
            'agent_role' => 'Initiator',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/1b47567f-8f7b-444b-aae3-b0c634622d10/displayicon.png',
            'agent_skill_1' => 'Trailblazer',
            'agent_skill_2' => 'Guiding Light',
            'agent_skill_3' => 'Regrowth',
            'agent_skill_4' => 'Seekers',
            'agent_image' => 'https://media.valorant-api.com/agents/6f2a04ca-43e0-be17-7f36-b3908627744d/fullportrait.png',
        ]);
        //YORU
        DB::table('agent')->insert([
            'agent_id' => 12,
            'agent_name' => 'Yoru',
            'agent_description' => "Japanese native, Yoru, rips holes straight through reality to infiltrate enemy lines unseen. Using deception and aggression in equal measure, he gets the drop on each target before they know where to look.",
            'agent_role' => 'Duelist',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/dbe8757e-9e92-4ed4-b39f-9dfc589691d4/displayicon.png',
            'agent_skill_1' => 'Blindside',
            'agent_skill_2' => 'Gatecrash',
            'agent_skill_3' => 'Fakeout',
            'agent_skill_4' => 'Dimensional Drift',
            'agent_image' => 'https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/fullportrait.png',
        ]);
        //KAY/O
        DB::table('agent')->insert([
            'agent_id' => 13,
            'agent_name' => 'KAY/O',
            'agent_description' => "KAY/O is a machine of war built for a single purpose: neutralizing radiants. His power to suppress enemy abilities cripples his opponents' capacity to fight back, securing him and his allies the ultimate edge.",
            'agent_role' => 'Initiator',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/1b47567f-8f7b-444b-aae3-b0c634622d10/displayicon.png',
            'agent_skill_1' => 'Flash/Drive',
            'agent_skill_2' => 'Zero/Point',
            'agent_skill_3' => 'Frag/Ment', 
            'agent_skill_4' => 'Null/CMD',
            'agent_image' => 'https://media.valorant-api.com/agents/601dbbe7-43ce-be57-2a40-4abd24953621/fullportrait.png',
        ]);
        //REYNA
        DB::table('agent')->insert([
            'agent_id' => 14,
            'agent_name' => 'Reyna',
            'agent_description' => "Forged in the heart of Mexico, Reyna dominates single combat, popping off with each kill she scores. Her capability is only limited by her raw skill, making her highly dependent on performance.",
            'agent_role' => 'Duelist',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/dbe8757e-9e92-4ed4-b39f-9dfc589691d4/displayicon.png',
            'agent_skill_1' => 'Devour',
            'agent_skill_2' => 'Dismiss',
            'agent_skill_3' => 'Leer', 
            'agent_skill_4' => 'Empress',
            'agent_image' => 'https://media.valorant-api.com/agents/a3bfb853-43b2-7238-a4f1-ad90e9e46bcc/fullportrait.png',
        ]);
        //Cypher
        DB::table('agent')->insert([
            'agent_id' => 15,
            'agent_name' => 'Cypher',
            'agent_description' => "The Moroccan information broker, Cypher is a one-man surveillance network who keeps tabs on the enemy's every move. No secret is safe. No maneuver goes unseen. Cypher is always watching.",
            'agent_role' => 'Sentinel',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/5fc02f99-4091-4486-a531-98459a3e95e9/displayicon.png',
            'agent_skill_1' => 'Cyber Cage',
            'agent_skill_2' => 'Spy Cam',
            'agent_skill_3' => 'Trapwire', 
            'agent_skill_4' => 'Neural Theft',
            'agent_image' => 'https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/fullportrait.png',
        ]);
        //Killjoy
        DB::table('agent')->insert([
            'agent_id' => 16,
            'agent_name' => 'Killjoy',
            'agent_description' => "The genius of Germany, Killjoy secures and defends key battlefield positions with a collection of traps, turrets, and mines. Each invention is primed to punish any assailant too dumb to back down.",
            'agent_role' => 'Sentinel',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/5fc02f99-4091-4486-a531-98459a3e95e9/displayicon.png',
            'agent_skill_1' => 'Alarm Bot',
            'agent_skill_2' => 'Turret',
            'agent_skill_3' => 'Nanoswarm', 
            'agent_skill_4' => 'Lockdown',
            'agent_image' => 'https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/fullportrait.png',
        ]);
        //Omen
        DB::table('agent')->insert([
            'agent_id' => 17,
            'agent_name' => 'Omen',
            'agent_description' => "A phantom of a memory, Omen hunts in the shadows. He renders enemies blind, teleports across the field, then lets paranoia take hold as his foe scrambles to learn where he might strike next.",
            'agent_role' => 'Controller',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/4ee40330-ecdd-4f2f-98a8-eb1243428373/displayicon.png',
            'agent_skill_1' => 'Paranoia',
            'agent_skill_2' => 'Dark Cover',
            'agent_skill_3' => 'Shrouded Step', 
            'agent_skill_4' => 'From The Shadows',
            'agent_image' => 'https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/fullportrait.png',
        ]);
        //Jett
        DB::table('agent')->insert([
            'agent_id' => 18,
            'agent_name' => 'Jett',
            'agent_description' => "Representing her home country of South Korea, Jett's agile and evasive fighting style lets her take risks no one else can. She runs circles around every skirmish, cutting enemies before they even know what hit them.",
            'agent_role' => 'Duelist',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/dbe8757e-9e92-4ed4-b39f-9dfc589691d4/displayicon.png',
            'agent_skill_1' => 'Updraft',
            'agent_skill_2' => 'Tailwind',
            'agent_skill_3' => 'Cloudburst', 
            'agent_skill_4' => 'Bladestorm',
            'agent_image' => 'https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/fullportrait.png',
        ]);
        //Astra
        DB::table('agent')->insert([
            'agent_id' => 19,
            'agent_name' => 'Astra',
            'agent_description' => "Ghanaian Agent Astra harnesses the energies of the cosmos to reshape battlefields to her whim. With full command of her astral form and a talent for deep strategic foresight, she's always eons ahead of her enemy's next move.",
            'agent_role' => 'Controller',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/4ee40330-ecdd-4f2f-98a8-eb1243428373/displayicon.png',
            'agent_skill_1' => 'Nova Pulse',
            'agent_skill_2' => 'Nebula',
            'agent_skill_3' => 'Gravity Well', 
            'agent_skill_4' => 'Astral Form / Cosmic Divide',
            'agent_image' => 'https://media.valorant-api.com/agents/41fb69c1-4189-7b37-f117-bcaf1e96f1bf/fullportrait.png',
        ]);
        //Neon
        DB::table('agent')->insert([
            'agent_id' => 20,
            'agent_name' => 'Neon',
            'agent_description' => "Filipino Agent Neon surges forward at shocking speeds, discharging bursts of bioelectric radiance as fast as her body generates it. She races ahead to catch enemies off guard, then strikes them down quicker than lightning.",
            'agent_role' => 'Duelist',
            'agent_role_icon' => 'https://media.valorant-api.com/agents/roles/dbe8757e-9e92-4ed4-b39f-9dfc589691d4/displayicon.png',
            'agent_skill_1' => 'Relay Bolt',
            'agent_skill_2' => 'High Gear',
            'agent_skill_3' => 'Fast Lane', 
            'agent_skill_4' => 'Overdrive',
            'agent_image' => 'https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/fullportrait.png',
        ]);
    }
}

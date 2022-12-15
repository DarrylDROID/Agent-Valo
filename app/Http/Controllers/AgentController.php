<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agents::create([
            'agent_id' => $request-> agent_id,
            'agent_name' => $request->agent_name,
            'agent_description' => $request->agent_description,
            'agent_role' => $request->agent_role,
            'agent_skill_1' => $request->agent_skill_1,
            'agent_skill_2' => $request->agent_skill_2,
            'agent_skill_3'=> $request->agent_skill_3,
            'agent_skill_4'=> $request->agent_skill_4,
            'agent_image' => $request->agent_image,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = Agents::find($id);
        return response()->json($agent, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agents = Agents::find($id);
        $agents->update([
            'agent_id' => $request-> agent_id,
            'agent_name' => $request->agent_name,
            'agent_description' => $request->agent_description,
            'agent_role' => $request->agent_role,
            'agent_skill_1' => $request->agent_skill_1,
            'agent_skill_2' => $request->agent_skill_2,
            'agent_skill_3'=> $request->agent_skill_3,
            'agent_skill_4'=> $request->agent_skill_4,
            'agent_image' => $request->agent_image,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

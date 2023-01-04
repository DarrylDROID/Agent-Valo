<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /**
     * @OA\Get(
     *      path="/getagent",
     *      operationId="getAgent",
     *      tags={"Agent"},
     *      summary="Get list of all Agents",
     *      description="Returns list of agents",
     *      * @OA\Parameter(
     *      name="apikey",
     *      in="header",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     * ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function index(Request $request)
    {
        $apikey = $request->header('apikey');
        $users = User::all();
        foreach($users as $user){
            $key = $user->apikey;
            if($apikey == $key){
                $agents = Agents::all();
                return response()->json($agents, 200);
            }
        }
        return response("Invalid API Key", 405);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     /**
     * @OA\Get(
     *      path="/getagent/{id}",
     *      operationId="getAgentbyId",
     *      tags={"Agent"},
     *      summary="Get list of Agent by Id",
     *      description="Returns list of agents",
     *       *  @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     * * @OA\Parameter(
     *      name="apikey",
     *      in="header",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     * ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function show(Request $request, $id)
    { 
        $apikey = $request->header('apikey');
        $users = User::all();
        foreach($users as $user){
            $key = $user->apikey;
            if($apikey == $key){
                $agent = Agents::find($id);
                return response()->json($agent, 200);
            }
        }
        return response("Invalid API Key", 405);
    }

    /**
     * @OA\Get(
     *      path="/getagents/{role}",
     *      operationId="getAgentbyRole",
     *      tags={"Agent"},
     *      summary="Get list of Agent by Role",
     *      description="Returns list of agents",
     *      @OA\Parameter(
     *      name="role",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     * @OA\Parameter(
     *      name="apikey",
     *      in="header",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     * ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function showrole(Request $request, $role)
    {
        
        $apikey = $request->header('apikey');
        $users = User::all();
        foreach($users as $user){
            $key = $user->apikey;
            if($apikey == $key){
                $agent = Agents::all()->where('agent_role', $role);
                return response()->json($agent, 200);
            }
        }
        return response("Invalid API Key", 405);
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
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}

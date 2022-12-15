<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'agent_id';
    protected $keyType = 'integer';
    protected $table = 'agent';
    protected $fillable = [
        'agent_id',
        'agent_name',
        'agent_description',
        'agent_role',
        'agent_skill_1',
        'agent_skill_2',
        'agent_skill_3',
        'agent_skill_4',
        'agent_image',
    ];
}

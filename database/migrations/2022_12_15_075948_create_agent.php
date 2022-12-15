<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent', function (Blueprint $table) {
            $table->integer('agent_id')->primary();
            $table->String('agent_name');
            $table->String('agent_description');
            $table->String('agent_role');
            $table->String('agent_skill_1');
            $table->String('agent_skill_2');
            $table->String('agent_skill_3');
            $table->String('agent_skill_4');
            $table->String('agent_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

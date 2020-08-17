<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::table('clientes')->insert([
            ['id' => 1,	'public_place' => 'Alguma Rua', 'number' => '205', 'complement' => '', 'zip_code' => '84177-442', 'neighborhood' => 'Qualquer Bairro', 'city' => 'Alguma cidade',	'federated_unit' => 'FF', 'user' => 2, 'created_at' => null, 'updated_at' => null]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('DELETE FROM clientes WHERE id = 1');
    }
}

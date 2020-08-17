<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InsertUserAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Administrador', 'email' => 'admin@admin.com', 'email_verified_at' => null, 'password' => Hash::make('admin'), 'remember_token' => null, 'created_at' => null, 'updated_at' => null, 'profile' => 1],
            ['id' => 2, 'name' => 'Cliente', 'email' => 'cliente@cliente.com', 'email_verified_at' => null, 'password' => Hash::make('cliente'), 'remember_token' => null, 'created_at' => null, 'updated_at' => null, 'profile' => 2],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('DELETE FROM users WHERE id = 1');
        DB::delete('DELETE FROM users WHERE id = 2');
    }
}

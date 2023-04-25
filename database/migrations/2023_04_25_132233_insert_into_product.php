<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('table_product')->insert(
            array(
                'name' => 'Giày đinh',
                'quantity' => 5,
                'id_category' => 1,
            ),
        );
        DB::table('table_product')->insert(
            array(
                'name' => 'Giày 2',
                'quantity' => 5,
                'id_category' => 1,
            ),
        );
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

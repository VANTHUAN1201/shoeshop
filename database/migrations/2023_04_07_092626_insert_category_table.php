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
        //
        DB::table('category')->insert(
            array(
                'name' => 'Bé trai kẹt trong cọc bê tông tử vong',
            )
        );

        DB::table('category')->insert(
            array(
                'name' => 'Những cuốn sách phải mua nhưng không dùng',
            )
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Date;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('sdt')->unique();
            $table->string('addr');
            $table->unsignedBigInteger('id_quyen');
            $table->foreign('id_quyen')->references('id')->on('quyen')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('Hang', function (Blueprint $table) {
            $table->id();
            $table->string('ten')->unique();
            $table->timestamps();
        });
        Schema::create('mau', function (Blueprint $table) {
            $table->id();
            $table->string('ten')->unique();
            $table->timestamps();
        });
        Schema::create('size', function (Blueprint $table) {
            $table->id();
            $table->string('ten')->unique();
            $table->timestamps();
        });
        Schema::create('giay', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->integer('gia')->default(0);
            $table->unsignedBigInteger('id_hang');
            $table->foreign('id_hang')->references('id')->on('hang')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('chi_tiet_giay', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_giay')->unique();
            $table->unsignedBigInteger('id_mau');
            $table->unsignedBigInteger('id_size')->unique();
            $table->integer('soluong')->unique();
            $table->foreign('id_giay')->references('id')->on('giay')->onDelete('cascade');
            $table->foreign('id_mau')->references('id')->on('mau')->onDelete('cascade');
            $table->foreign('id_size')->references('id')->on('size')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('image', function (Blueprint $table) {
            $table->id();
            $table->string('anh')->unique();
            $table->unsignedBigInteger('id_chi_tiet_giay')->unique();
            $table->foreign('id_chi_tiet_giay')->references('id')->on('chi_tiet_giay')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('giohang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
            $table->integer('tong_tien')->default(0);
            $table->timestamps();
        });
        Schema::create('chitiet_giohang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_giay');
            $table->foreign('id_giay')->references('id')->on('giay')->onDelete('cascade');
            $table->unsignedBigInteger('id_giohang');
            $table->foreign('id_giohang')->references('id')->on('giohang')->onDelete('cascade');
            $table->integer('soluong')->default(1);
            $table->integer('tongtien')->default(0);
            $table->timestamps();
        });
        Schema::create('nhapkho', function (Blueprint $table) {
            $table->id();
            $table->date('ngay_nhap');
            $table->timestamps();
        });
        Schema::create('chitiet_nhapkho', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('sdt')->unique();
            $table->string('addr');
            $table->int('id_quyen')->references('quyen');
            $table->timestamps();
        });
        Schema::create('donhang', function (Blueprint $table) {
            $table->id();
            $table->date('ngaymua');
            $table->string('trangthai');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('sdt')->unique();
            $table->string('addr');
            $table->int('id_quyen')->references('quyen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables_shop');
    }
};

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
        Schema::create('hang', function (Blueprint $table) {
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
            $table->unsignedBigInteger('id_giay');
            $table->unsignedBigInteger('id_mau');
            $table->unsignedBigInteger('id_size');
            $table->integer('soluong');
            $table->foreign('id_giay')->references('id')->on('giay')->onDelete('cascade');
            $table->foreign('id_mau')->references('id')->on('mau')->onDelete('cascade');
            $table->foreign('id_size')->references('id')->on('size')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('anh', function (Blueprint $table) {
            $table->id();
            $table->string('anh')->unique();
            $table->unsignedBigInteger('id_chi_tiet_giay');
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
            $table->unsignedBigInteger('id_giay');
            $table->foreign('id_giay')->references('id')->on('giay')->onDelete('cascade');
            $table->unsignedBigInteger('id_nhapkho');
            $table->foreign('id_nhapkho')->references('id')->on('nhapkho')->onDelete('cascade');
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
        Schema::create('chitiet_donhang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_giay');
            $table->foreign('id_giay')->references('id')->on('giay')->onDelete('cascade');
            $table->unsignedBigInteger('id_donhang');
            $table->foreign('id_donhang')->references('id')->on('donhang')->onDelete('cascade');
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
        Schema::dropIfExists('user');
        Schema::dropIfExists('hang');
        Schema::dropIfExists('mau');
        Schema::dropIfExists('size');
        Schema::dropIfExists('giay');
        Schema::dropIfExists('donhang');
        Schema::dropIfExists('chitiet_donhang');
        Schema::dropIfExists('anh');
        Schema::dropIfExists('nhapkho');
        Schema::dropIfExists('chitiet_nhapkho');
        Schema::dropIfExists('chi_tiet_giay');
        Schema::dropIfExists('giohang');
        Schema::dropIfExists('chitiet_giohang');
    }
};

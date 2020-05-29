<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pro_cate')->unsigned();
            $table->string('pro_name');
            $table->integer('pro_price');
            $table->string('pro_img');
            $table->string('pro_Warranty');//bảo hàn
            $table->string('pro_accessories');//phụ kiện
            $table->string('pro_condition');//tình trạng
            $table->string('pro_promotion');//khuyến mại
            $table->tinyInteger('pro_status');
            $table->text('pro_decription');
            $table->tinyInteger('pro_featured');//nổi bật
            $table->foreign('pro_cate')
                ->references('id')
                ->on('category')
                ->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}

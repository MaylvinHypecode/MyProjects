<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketHasProductTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'basket_has_product';

    /**
     * Run the migrations.
     * @table basket_has_product
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('basket_id');
            $table->unsignedInteger('product_id');
            $table->timestamps();

            $table->index(["basket_id"], 'fk_basket_has_product_basket_idx');

            $table->index(["product_id"], 'fk_basket_has_product_product1_idx');


            $table->foreign('basket_id', 'fk_basket_has_product_basket_idx')
                ->references('id')->on('basket')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('product_id', 'fk_basket_has_product_product1_idx')
                ->references('id')->on('product')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}

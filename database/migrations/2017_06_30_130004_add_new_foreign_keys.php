<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddNewForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function($table) {
            $table->integer('restaurant_id')->unsigned()->change();

            $table->foreign('restaurant_id')
                ->references('id')->on('restaurants')
                ->onDelete('cascade');
        });

        Schema::table('orders', function($table) {
            $table->integer('user_id')->unsigned()->change();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });

        Schema::table('order_items', function($table) {
            $table->integer('user_id')->unsigned()->change();
            $table->integer('order_id')->unsigned()->change();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('items', function($table) {
          $table->dropForeign('items_restaurant_id_foreign');
      });
      
      Schema::table('items', function($table) {
          $table->integer('restaurant_id')->signed()->change();
      });

      Schema::table('orders', function($table) {
          $table->dropForeign('orders_user_id_foreign');
      });

      Schema::table('orders', function($table) {
          $table->integer('user_id')->signed()->change();
      });

      Schema::table('order_items', function($table) {
          $table->dropForeign('order_items_user_id_foreign');

          $table->dropForeign('order_items_order_id_foreign');
      });

      Schema::table('order_items', function($table) {
          $table->integer('user_id')->signed()->change();
          $table->integer('order_id')->signed()->change();
      });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSharedIdToProductsAndCategories extends Migration
{
	public function up()
	{
		Schema::table('products', function (Blueprint $table) {
			$table->integer('product_id')->nullable();
		});

		Schema::table('categories', function (Blueprint $table) {
			$table->integer('category_id')->nullable();
		});
	}

	public function down()
	{
		Schema::table('products', function (Blueprint $table) {
			$table->dropColumn('product_id');
		});

		Schema::table('categories', function (Blueprint $table) {
			$table->dropColumn('category_id');
		});
	}
}

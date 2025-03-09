<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingColumnsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('image')->nullable()->after('sales_count'); // Add image column
            $table->decimal('discount', 8, 2)->default(0)->after('image'); // Add discount column
            $table->boolean('is_new')->default(false)->after('discount'); // Add is_new column
            $table->boolean('is_sale')->default(false)->after('is_new'); // Add is_sale column
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['image', 'discount', 'is_new', 'is_sale']);
        });
    }
}
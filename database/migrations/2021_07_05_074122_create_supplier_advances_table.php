<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierAdvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_advances', function (Blueprint $table) {
            $table->id();
            $table->double('amount', 16, 2);
            $table->integer('advanceType');
            $table->date('paymentDate');
            $table->text('text')->nullable();
            $table->integer('trip_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('page')->default('5');
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
        Schema::dropIfExists('supplier_advances');
    }
}

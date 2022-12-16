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
        Schema::create('orders', function (Blueprint $table) 
        {
            $table->id();
            $table->string('orderName');
            $table->string('orderPhone');
            $table->string('orderEmail');        
            $table->string('orderAddress');
            $table->string('orderDate');
            $table->float('orderTotalPrice',8,2);
            $table->string('orderUploadReceipt');
            $table->string('orderInvoice');
            $table->string('orderStatus');
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
        Schema::dropIfExists('orders');
    }
};

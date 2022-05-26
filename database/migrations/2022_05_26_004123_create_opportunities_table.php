<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();

            $table->integer('supplier_id');
            $table->string('supplier_logo');
            $table->string('title');
            $table->integer('monthly_est_sale');
            $table->integer('pack_of_qty');
            $table->integer('is_bundle')->default(0);
            $table->double('accuracy');
            $table->string('img');
            $table->integer('match_id');
            $table->string('match_img');
            $table->string('match_logo');
            $table->string('match_title');
            $table->integer('match_monthly_est_sale');
            $table->integer('match_pack_of_qty');
            $table->integer('match_is_bundle')->default(0); // status = 1 => active, status = 0 => inactive

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
        Schema::dropIfExists('opportunities');
    }
}

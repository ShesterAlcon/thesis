<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('comorbidity');
            $table->string('unique_person_id')->unique();
            $table->string('Registered');
            $table->string('pwd');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix');
            $table->string('contact');
            $table->string('region');
            $table->string('province');
            $table->string('municipality');
            $table->string('barangay');
            $table->string('sex');
            $table->string('birthdate');
            $table->string('deferral');
            $table->string('deferral_reason');
            $table->string('vaccination_date');
            $table->string('vaccine_manufacturer_name');
            $table->string('batch_number');
            $table->string('lot_no');
            $table->string('bakuna_center_cbr_id');
            $table->string('vaccinator_name');
            $table->string('1st_dose');
            $table->string('2nd_dose');
            $table->string('booster_dose');
            $table->string('adverse_event');
            $table->string('adverse_event_condition');
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
        Schema::dropIfExists('patients');
    }
}

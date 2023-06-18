<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('regist_forms', function (Blueprint $table) {
            $table->increments('id_form');
            $table->string('organizer');
            $table->string('address');
            $table->string('contact');
            $table->string('email');
            $table->string('identity_card');
            $table->string('title',50);
            $table->string('event_location',50);
            $table->string('category',15);
            $table->string('ticket_price');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('event_detail');
            $table->string('event_website');
            $table->string('event_logo');
            $table->string('event_poster');
            $table->string('account_number');
            $table->string('payment_proof');
            $table->enum('status',['pending','approved','rejected'])->default('pending');
            $table->timestamps();
            //tambahin foreign key user
            //di
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regist_forms');
    }
};

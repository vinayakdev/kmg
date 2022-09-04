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
        Schema::create("profiles", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("name");
            $table->string("phone")->nullable();
            $table->string("pincode")->nullable();
            $table->string("area")->nullable();
            $table->string("district")->nullable();
            $table->string("city")->nullable();
            $table->string("caste")->nullable();

            $table->string("star")->nullable();

            $table->string("job")->nullable();
            $table->string("education")->nullable();
            $table->string("hobbies")->nullable();

            $table->string("foodpreference")->nullable();
            $table->string("height")->nullable();
            $table->string("weight")->nullable();

            $table->string("marital_status")->nullable();
            $table->text("description")->nullable();

            $table->timestamps();

            $table->index("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("profiles");
    }
};

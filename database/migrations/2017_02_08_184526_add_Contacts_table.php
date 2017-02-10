<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contacts', function (Blueprint $table) {
            $table->increments('contactId');    // Unique ID for contacts
            $table->String('lastName')->nullable();         // Field Size 50
            $table->String('firstName')->nullable();        // Field Size 50
            $table->String('middleName')->nullable();       // Field Size 50
            $table->String('company')->nullable();          // Field Size 50
            $table->String('address1')->nullable();         // Field Size 100
            $table->String('address2')->nullable();         // Field Size 100
            $table->String('city')->nullable();             //Field Size 50
            $table->String('region')->nullable();           // Field Size 50
            $table->String('postalCode')->nullable();       // Field Size 25
            $table->String('workPhone')->nullable();        // Field Size 12
            $table->String('homePhone')->nullable();        // Field Size 12
            $table->String('cellPhone')->nullable();        // Field Size 12
            $table->String('email')->nullable();            // Field Size 50
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contacts');
    }
}

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
            $table->String('lastName');         // Field Size 50
            $table->String('firstName');        // Field Size 50
            $table->String('middleName');       // Field Size 50
            $table->String('company');          // Field Size 50
            $table->String('address1');         // Field Size 100
            $table->String('address2');         // Field Size 100
            $table->String('city');             // Field Size 50
            $table->String('region');           // Field Size 50
            $table->String('postalCode');       // Field Size 25
            $table->String('workPhone');        // Field Size 12
            $table->String('homePhone');        // Field Size 12
            $table->String('cellPhone');        // Field Size 12
            $table->String('email');            // Field Size 50
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

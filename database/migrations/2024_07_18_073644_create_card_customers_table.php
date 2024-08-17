<?php

// database/migrations/2024_07_24_000000_create_card_customers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('address')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('cardType', ['gold', 'silver', 'platinum']);
            $table->string('cardNumber');
            $table->date('cardExpiryDate');
            $table->string('cardCVV');
            $table->date('cardIssueDate');
            $table->decimal('cardBalance', 8, 2);
            $table->decimal('cardLimit', 8, 2);
            $table->text("additionalInfo")->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_customers');
    }
}

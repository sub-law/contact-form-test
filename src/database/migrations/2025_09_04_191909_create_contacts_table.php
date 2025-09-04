<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // bigint unsigned, PRIMARY KEY, NOT NULL
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();// FOREIGN KEY
            $table->string('first_name'); // NOT NULL
            $table->string('last_name');  // NOT NULL
            $table->tinyInteger('gender'); // NOT NULL, 1:男性 2:女性 3:その他
            $table->string('email'); // NOT NULL
            $table->string('tel')->nullable(); // 任意
            $table->string('address')->nullable(); // 任意
            $table->string('building')->nullable(); // 任意
            $table->text('detail')->nullable(); // 任意
            $table->timestamps(); // created_at, updated_at（どちらも NOT NULL）
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
}

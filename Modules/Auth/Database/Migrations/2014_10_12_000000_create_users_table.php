<?php

use App\Enums\StatusType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', static function (Blueprint $table) {
            $table->uuid('id')->primary();//->unique();
            $table->string('user', 30);
            $table->string('full_name', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 15);
            $table->string('phone', 15)->nullable();
            $table->boolean('email_verified')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('status', ['Pending', 'Actived', 'Suspended', 'Deleted'])->default(StatusType::Pending()->value);
            //$table->unsignedBigInteger('role_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            //$table->foreign('role_id')->references('id')->on('roles');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

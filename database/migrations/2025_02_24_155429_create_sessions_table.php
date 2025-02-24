<?php

// database/migrations/xxxx_xx_xx_create_sessions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Session ID
            $table->foreignId('user_id')->nullable()->index(); // User ID (nullable)
            $table->string('ip_address', 45)->nullable(); // IP address
            $table->text('user_agent')->nullable(); // User agent
            $table->text('payload'); // Session data
            $table->integer('last_activity')->index(); // Last activity timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions'); // Drop the table if it exists
    }
}

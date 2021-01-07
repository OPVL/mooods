<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersNameColumns extends Migration
{
    public function up(): void
    {
        Schema::table('users', static function (Blueprint $table): void {
            $table->dropColumn('name');
            $table->string('firstname', 60);
            $table->string('surname', 60);
        });
    }

    public function down()
    {
        return;
    }
}

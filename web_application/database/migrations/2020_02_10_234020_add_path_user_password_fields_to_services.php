<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPathUserPasswordFieldsToServices extends Migration
{
    const TABLE = 'services';
    const PATH = 'path';
    const USERNAME = 'username';
    const PASSWORD = 'password';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
            $table->string(self::PATH, 190)->nullable()->after('port');
            $table->string(self::USERNAME, 128)->nullable()->after('port');
            $table->string(self::PASSWORD, 128)->nullable()->after('port');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
            $table->dropColumn(self::PATH);
            $table->dropColumn(self::USERNAME);
            $table->dropColumn(self::PASSWORD);
        });
    }
}

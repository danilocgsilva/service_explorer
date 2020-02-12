<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProtocolFieldToServicesTable extends Migration
{
    const TABLE_NAME = 'services';
    const FIELD_NAME = 'protocol';

    /**
     * @return void
     */
    public function up() : void
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->string(self::FIELD_NAME)->after('port');
        });
    }

    /**
     * @return void
     */
    public function down() : void
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->dropColumn(self::FIELD_NAME);
        });
    }
}

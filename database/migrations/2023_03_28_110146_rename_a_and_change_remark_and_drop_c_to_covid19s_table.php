<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAAndChangeRemarkAndDropCToCovid19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('covid19s', function (Blueprint $table) {
            $table->renameColumn('a', 'total_in_1m'); //เปลี่ยนชื่อ Column
            $table->text('b')->nullable()->change(); //เปลี่ยน Data Type
            $table->dropColumn('c'); // ลบ column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('covid19s', function (Blueprint $table) {
            //
        });
    }
}

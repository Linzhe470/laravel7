<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTitleToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            //
            //避免報錯 請輸入下方指令
            //composer require doctrine/dbal:2.10
            $table->longText('title')->nullable()->change();
            $table->renameColumn('views','view');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            //
            $table->string('title')->nullable()->change();
            $table->renameColumn('view','views');
        });
    }
}

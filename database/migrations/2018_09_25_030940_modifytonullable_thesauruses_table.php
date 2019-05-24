<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifytonullableThesaurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thesauruses', function (Blueprint $table) {
            $table->longText('mt')->nullable()->change();
            $table->longText('sn')->nullable()->change();
            $table->longText('uf')->nullable()->change();
            $table->longText('use')->nullable()->change();
            $table->longText('bt')->nullable()->change();
            $table->longText('nt')->nullable()->change();
            $table->longText('it')->nullable()->change();
            $table->longText('so')->nullable()->change();
            $table->longText('de')->nullable()->change();
            $table->longText('ko')->nullable()->change();
            $table->longText('ana')->nullable()->change();
            $table->string('tgl')->nullable()->change();
            $table->boolean('is_approved')->nullable()->change();
            $table->boolean('status')->nullable()->change();
            $table->string('author')->nullable()->change();
            $table->string('audited_by')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thesauruses', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesaurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thesauruses', function (Blueprint $table) {
                $table->string('id');
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
                $table->timestamps();
                $table->boolean('is_approved')->default(false);
                $table->boolean('status')->default(false);
                $table->string('author')->default('Author Thesaurus');
                $table->string('audited_by')->default('Admin Thesaurus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thesauruses');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditPosts extends Migration
{
    public function up()
    {

    Schema::table('posts', function (Blueprint $table) {
        $table->longText('slug')->after('content');
        

    });
    }


    public function down()
    {
        //
    }
}

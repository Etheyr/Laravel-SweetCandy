<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBonbons extends Migration
{
      public function up()
    {
        Schema::create('bonbons',function (Blueprint $bonbon){
           $bonbon->increments('id');
           $bonbon->string('name', 255);
           $bonbon->integer('stock');
       });
    }
    public function down()
    {
         Schema::drop('bonbons');
    }
}

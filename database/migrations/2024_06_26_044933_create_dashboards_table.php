<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('title');
            $table->string('detail');
            $table->string('info');
            $table->string('description');
            $table->string('infoa');
            $table->string('descriptiona');
            $table->string('infob');
            $table->string('descriptionb');
            $table->string('infoc');
            $table->string('descriptionc');
            $table->string('head');
            $table->string('heading');
            $table->string('detaill');
            $table->string('bar1');
            $table->string('bar2');
            $table->string('bar3');
            $table->string('bar4');
            $table->string('bar5');
            $table->string('bar6');
            $table->string('icon1');
            $table->string('icon2');
            $table->string('icon3');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('icon4');
            $table->string('headd');
            $table->string('atitle');
            $table->string('adetail');
            $table->string('btitle');
            $table->string('bdetail');
            $table->string('ctitle');
            $table->string('cdetail');
            $table->string('dtitle');
            $table->string('ddetail');
            $table->string('etitle');
            $table->string('edetail');
            $table->string('ftitle');
            $table->string('fdetail');
            $table->string('name');
            $table->string('designation');
            $table->string('company');
            $table->string('hard');
            $table->string('namea');
            $table->string('designationa');
            $table->string('nameb');
            $table->string('designationb');
            $table->string('namec');
            $table->string('designationc');
            $table->string('named');
            $table->string('designationd');
            $table->string('price');
            $table->string('dollar');
            $table->string('dollara');
            $table->string('dollarb');
            $table->string('dollarc');
            $table->timestamps();
        });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboards');
    }
};

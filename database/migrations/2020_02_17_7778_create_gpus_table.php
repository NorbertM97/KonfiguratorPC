<?php

use App\Gpu;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producent_id');
            $table->foreign('producent_id')->references('id')->on('producents');
            $table->text('name');
            $table->text('zdj');
            $table->text('type_of_item');
            $table->text('series');
            $table->integer('memory');
            $table->integer('size');
            $table->integer('power');
            $table->timestamps();
        });

        $data = [
            ['producent_id'=>'11','name'=>'RTX 2080SUPER GAMING X 328mm','zdj'=>'../images/GPU/gpu1.png' ,'type_of_item'=>'gpu','series'=>'2080','memory'=>'8','size'=>'328','power'=>'400'],
            ['producent_id'=>'11','name'=>'RTX 2080SUPER 292mm','zdj'=>'../images/GPU/gpu2.png' ,'type_of_item'=>'gpu','series'=>'2080','memory'=>'8','size'=>'292','power'=>'400'],
            ['producent_id'=>'11','name'=>'RTX 2070SUPER GAMING X 328mm','zdj'=>'../images/GPU/gpu3.png' ,'type_of_item'=>'gpu','series'=>'2070','memory'=>'8','size'=>'328','power'=>'300'],
            ['producent_id'=>'11','name'=>'RTX 2070SUPER GAMING 292mm','zdj'=>'../images/GPU/gpu4.png' ,'type_of_item'=>'gpu','series'=>'2070','memory'=>'8','size'=>'292','power'=>'300'],
            ['producent_id'=>'11','name'=>'RTX 2060Super ROG 301mm','zdj'=>'../images/GPU/gpu5.png' ,'type_of_item'=>'gpu','series'=>'2060','memory'=>'8','size'=>'301','power'=>'250'],
            ['producent_id'=>'11','name'=>'RTX 2060Super ROG 290mm','zdj'=>'../images/GPU/gpu6.png' ,'type_of_item'=>'gpu','series'=>'2060','memory'=>'8','size'=>'290','power'=>'250'],
            ['producent_id'=>'11','name'=>'GTX 1660Ti WINDFORCE 265mm','zdj'=>'../images/GPU/gpu7.png' ,'type_of_item'=>'gpu','series'=>'1660','memory'=>'6','size'=>'265','power'=>'175'],
            ['producent_id'=>'11','name'=>'GTX 1660Ti VENTUS 204mm','zdj'=>'../images/GPU/gpu8.png' ,'type_of_item'=>'gpu','series'=>'1660','memory'=>'6','size'=>'204','power'=>'175'],
            ['producent_id'=>'11','name'=>'GTX 1050Ti GAMING X 229mm','zdj'=>'../images/GPU/gpu9.png' ,'type_of_item'=>'gpu','series'=>'1050','memory'=>'4','size'=>'229','power'=>'128'],
            ['producent_id'=>'11','name'=>'GTX 1050Ti 167mm','zdj'=>'../images/GPU/gpu10.png' ,'type_of_item'=>'gpu','series'=>'1050','memory'=>'4','size'=>'167','power'=>'128'],
            ['producent_id'=>'2','name'=>'RX 5700XT Gaming 280mm','zdj'=>'../images/GPU/gpu11.png' ,'type_of_item'=>'gpu','series'=>'5700','memory'=>'8','size'=>'280','power'=>'400'],
            ['producent_id'=>'2','name'=>'RX 5700XT NITRO 306mm','zdj'=>'../images/GPU/gpu12.png' ,'type_of_item'=>'gpu','series'=>'5700','memory'=>'8','size'=>'306','power'=>'400'],
            ['producent_id'=>'2','name'=>'RX 5500XT GAMING 247mm','zdj'=>'../images/GPU/gpu13.png' ,'type_of_item'=>'gpu','series'=>'5500','memory'=>'8','size'=>'247','power'=>'250'],
            ['producent_id'=>'2','name'=>'RX 5500XT DUAL 242mm','zdj'=>'../images/GPU/gpu14.png' ,'type_of_item'=>'gpu','series'=>'5500','memory'=>'8','size'=>'242','power'=>'250'],
            ['producent_id'=>'2','name'=>'RX 590 ARMOR 278mm','zdj'=>'../images/GPU/gpu15.png' ,'type_of_item'=>'gpu','series'=>'590','memory'=>'8','size'=>'278','power'=>'250'],
            ['producent_id'=>'2','name'=>'RX 590 ARMOR 272mm','zdj'=>'../images/GPU/gpu15.png' ,'type_of_item'=>'gpu','series'=>'590','memory'=>'8','size'=>'272','power'=>'250'],
            ['producent_id'=>'2','name'=>'RX 580 Dual 242mm','zdj'=>'../images/GPU/gpu17.png' ,'type_of_item'=>'gpu','series'=>'580','memory'=>'8','size'=>'242','power'=>'220'],
            ['producent_id'=>'2','name'=>'RX 580 ARMOR 269mm','zdj'=>'../images/GPU/gpu18.png' ,'type_of_item'=>'gpu','series'=>'580','memory'=>'8','size'=>'269','power'=>'220'],
            ['producent_id'=>'2','name'=>'RX 570 ARMOR 242mm','zdj'=>'../images/GPU/gpu19.png' ,'type_of_item'=>'gpu','series'=>'570','memory'=>'4','size'=>'242','power'=>'180'],
            ['producent_id'=>'2','name'=>'RX 570 PULSE 230mm','zdj'=>'../images/GPU/gpu20.png' ,'type_of_item'=>'gpu','series'=>'570','memory'=>'4','size'=>'230','power'=>'180'],
            ['producent_id'=>'2','name'=>'RX 560 PULSE 210mm','zdj'=>'../images/GPU/gpu21.png' ,'type_of_item'=>'gpu','series'=>'560','memory'=>'4','size'=>'210','power'=>'160'],
            ['producent_id'=>'2','name'=>'RX 560 Strix Gaming 194mm','zdj'=>'../images/GPU/gpu22.png' ,'type_of_item'=>'gpu','series'=>'560','memory'=>'4','size'=>'194','power'=>'168'],
            ['producent_id'=>'2','name'=>'RX 550 Red Dragon 167mm','zdj'=>'../images/GPU/gpu23.png' ,'type_of_item'=>'gpu','series'=>'550','memory'=>'4','size'=>'167','power'=>'120'],
            ['producent_id'=>'2','name'=>'RX 550 4GT LP 177mm','zdj'=>'../images/GPU/gpu24.png' ,'type_of_item'=>'gpu','series'=>'550','memory'=>'4','size'=>'177','power'=>'120'],
            ['producent_id'=>'11','name'=>'RTX 2080Ti XTREME 290mm','zdj'=>'../images/GPU/gpu25.png' ,'type_of_item'=>'gpu','series'=>'2080','memory'=>'11','size'=>'290','power'=>'450'],
            ['producent_id'=>'11','name'=>'RTX 2080Ti AORUS 290mm','zdj'=>'../images/GPU/gpu26.png' ,'type_of_item'=>'gpu','series'=>'2080','memory'=>'11','size'=>'290','power'=>'450'],
            ['producent_id'=>'11','name'=>'RTX 2070 TRI FROZR 304mm','zdj'=>'../images/GPU/gpu27.png' ,'type_of_item'=>'gpu','series'=>'2070','memory'=>'8','size'=>'304','power'=>'300'],
            ['producent_id'=>'11','name'=>'RTX 2070 Blower 267mm','zdj'=>'../images/GPU/gpu28.png' ,'type_of_item'=>'gpu','series'=>'2070','memory'=>'8','size'=>'267','power'=>'300'],
        ];

        Gpu::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpus');
    }
}

<?php

use App\Motherboard;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotherboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motherboards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('zdj');
            $table->integer('slots');
            $table->text('type_of_item');
            $table->unsignedBigInteger('compability_id');
            $table->foreign('compability_id')->references('id')->on('compabilities');
            $table->integer('max_timing');
            $table->unsignedBigInteger('socket_id');
            $table->foreign('socket_id')->references('id')->on('sockets');
            $table->unsignedBigInteger('producent_id');
            $table->foreign('producent_id')->references('id')->on('producents');
            $table->timestamps();
        });
        $data = [
            ['name'=>'MPG Z390 GAMING PLUS','zdj'=>'../images/motherboard/MSI1.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'4400','socket_id'=>'1','producent_id'=>'3'],
            ['name'=>'H310M PRO-M2 PLUS','zdj'=>'../images/motherboard/MSI2.png','slots'=>'2','type_of_item'=>'motherboard','compability_id'=>'2','max_timing'=>'4133','socket_id'=>'1','producent_id'=>'3'],
            ['name'=>'MPG Z390 GAMING EDGE','zdj'=>'../images/motherboard/MSI3.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'4400','socket_id'=>'1','producent_id'=>'3'],
            ['name'=>'MPG Z390I GAMING EDGE','zdj'=>'../images/motherboard/MSI4.png','slots'=>'2','type_of_item'=>'motherboard','compability_id'=>'3','max_timing'=>'4400','socket_id'=>'1','producent_id'=>'3'],
            ['name'=>'B450 TOMAHAWK MAX','zdj'=>'../images/motherboard/MSI5.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'4133','socket_id'=>'2','producent_id'=>'3'],
            ['name'=>'B450M MORTAR MAX','zdj'=>'../images/motherboard/MSI6.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'4133','socket_id'=>'2','producent_id'=>'3'],
            ['name'=>'B450I GAMING PLUS','zdj'=>'../images/motherboard/MSI7.png','slots'=>'2','type_of_item'=>'motherboard','compability_id'=>'3','max_timing'=>'3466','socket_id'=>'2','producent_id'=>'3'],
            ['name'=>'Z390 GAMING PRO CARBON','zdj'=>'../images/motherboard/MSI8.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'4400','socket_id'=>'1','producent_id'=>'3'],
            ['name'=>'B360 GAMING PRO CARBON','zdj'=>'../images/motherboard/MSI9.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'3466','socket_id'=>'1','producent_id'=>'3'],
            ['name'=>'H370 GAMING PRO CARBON','zdj'=>'../images/motherboard/MSI10.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'3466','socket_id'=>'1','producent_id'=>'3'],
            ['name'=>'Z390 GAMING X','zdj'=>'../images/motherboard/GIGABYTE1.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'3466','socket_id'=>'1','producent_id'=>'5'],
            ['name'=>'H310M S2H 2.0','zdj'=>'../images/motherboard/GIGABYTE2.png','slots'=>'2','type_of_item'=>'motherboard','compability_id'=>'2','max_timing'=>'3466','socket_id'=>'1','producent_id'=>'5'],
            ['name'=>'Z390 I AORUS PRO WIFI','zdj'=>'../images/motherboard/GIGABYTE3.png','slots'=>'2','type_of_item'=>'motherboard','compability_id'=>'3','max_timing'=>'3466','socket_id'=>'1','producent_id'=>'5'],
            ['name'=>'Z390 AORUS PRO','zdj'=>'../images/motherboard/GIGABYTE4.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'3466','socket_id'=>'1','producent_id'=>'5'],
            ['name'=>'B450 AORUS ELITE','zdj'=>'../images/motherboard/GIGABYTE5.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'1','max_timing'=>'3466','socket_id'=>'2','producent_id'=>'5'],
            ['name'=>'B450M DS3H','zdj'=>'../images/motherboard/GIGABYTE6.png','slots'=>'4','type_of_item'=>'motherboard','compability_id'=>'2','max_timing'=>'3466','socket_id'=>'2','producent_id'=>'5'],
            ['name'=>'X570 I AORUS PRO WIFI','zdj'=>'../images/motherboard/GIGABYTE7.png','slots'=>'2','type_of_item'=>'motherboard','compability_id'=>'3','max_timing'=>'3466','socket_id'=>'2','producent_id'=>'5'],
            ['name'=>'B450M GAMING','zdj'=>'../images/motherboard/GIGABYTE8.png','slots'=>'2','type_of_item'=>'motherboard','compability_id'=>'2','max_timing'=>'3466','socket_id'=>'2','producent_id'=>'5'],
        ];
        Motherboard::insert($data);
    }

    /**
     * Reverse the migrations.
     *

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motherboards');
    }
}

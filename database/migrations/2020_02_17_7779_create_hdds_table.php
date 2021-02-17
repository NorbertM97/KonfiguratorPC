<?php

use App\Hdd;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hdds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('zdj');
            $table->text('type_of_item');
            $table->unsignedBigInteger('producent_id');
            $table->foreign('producent_id')->references('id')->on('producents');
            $table->integer('capacity');
            $table->text('type');
            $table->timestamps();
        });

        $data = [
            ['name'=>'GoodRam CL100 240GB','zdj'=>'../images/DYSKI/goodram1.png','type_of_item'=>'hdd','producent_id'=>'10','capacity'=>'240','type'=>'SSD'],
            ['name'=>'GoodRam CX400 512GB','zdj'=>'../images/DYSKI/goodram2.png','type_of_item'=>'hdd','producent_id'=>'10','capacity'=>'512','type'=>'SSD'],
            ['name'=>'GOODRAM IRDM PRO 512GB ','zdj'=>'../images/DYSKI/goodram3.png','type_of_item'=>'hdd','producent_id'=>'10','capacity'=>'512','type'=>'SSD'],
            ['name'=>'GOODRAM S400U 240GB ','zdj'=>'../images/DYSKI/goodram4.png','type_of_item'=>'hdd','producent_id'=>'10','capacity'=>'240','type'=>'SSD'],
            ['name'=>'GOODRAM PX500 512GB ','zdj'=>'../images/DYSKI/goodram5.png','type_of_item'=>'hdd','producent_id'=>'10','capacity'=>'512','type'=>'SSD'],
            ['name'=>'GOODRAM IRDM ULT X 2TB ','zdj'=>'../images/DYSKI/goodram6.png','type_of_item'=>'hdd','producent_id'=>'10','capacity'=>'2000','type'=>'SSD'],
            ['name'=>'GOODRAM IRDM ULT X 1TB ','zdj'=>'../images/DYSKI/goodram6.png','type_of_item'=>'hdd','producent_id'=>'10','capacity'=>'1000','type'=>'SSD'],
            ['name'=>'GOODRAM IRDM ULT X 500GB ','zdj'=>'../images/DYSKI/goodram6.png','type_of_item'=>'hdd','producent_id'=>'10','capacity'=>'500','type'=>'SSD'],
            ['name'=>'Samsung 860 EVO 500GB','zdj'=>'../images/DYSKI/samsung1.png','type_of_item'=>'hdd','producent_id'=>'12','capacity'=>'500','type'=>'SSD'],
            ['name'=>'Samsung 970 EVO Plus 500GB','zdj'=>'../images/DYSKI/samsung2.png','type_of_item'=>'hdd','producent_id'=>'12','capacity'=>'500','type'=>'SSD'],
            ['name'=>'Samsung 970 EVO Plus 1TB','zdj'=>'../images/DYSKI/samsung2.png','type_of_item'=>'hdd','producent_id'=>'12','capacity'=>'1000','type'=>'SSD'],
            ['name'=>'Samsung 970 EVO Plus 2TB','zdj'=>'../images/DYSKI/samsung2.png','type_of_item'=>'hdd','producent_id'=>'12','capacity'=>'2000','type'=>'SSD'],
            ['name'=>'Samsung 860 QVO 1TB','zdj'=>'../images/DYSKI/samsung3.png','type_of_item'=>'hdd','producent_id'=>'12','capacity'=>'1000','type'=>'SSD'],
            ['name'=>'Samsung 860 PRO 512GB','zdj'=>'../images/DYSKI/samsung4.png','type_of_item'=>'hdd','producent_id'=>'12','capacity'=>'512','type'=>'SSD'],
            ['name'=>'Samsung 860 EVO 500GB','zdj'=>'../images/DYSKI/samsung5.png','type_of_item'=>'hdd','producent_id'=>'12','capacity'=>'500','type'=>'SSD'],
            ['name'=>'Seagate BARRACUDA 2TB','zdj'=>'../images/DYSKI/seagate1.png','type_of_item'=>'hdd','producent_id'=>'14','capacity'=>'2000','type'=>'HDD'],
            ['name'=>'Seagate IRONWOLF 4TB','zdj'=>'../images/DYSKI/seagate2.png','type_of_item'=>'hdd','producent_id'=>'14','capacity'=>'4000','type'=>'HDD'],
            ['name'=>'WesternDigital BLUE 1TB','zdj'=>'../images/DYSKI/wd1.png','type_of_item'=>'hdd','producent_id'=>'13','capacity'=>'1000','type'=>'HDD'],
            ['name'=>'WesternDigital Red 4TB','zdj'=>'../images/DYSKI/wd2.png','type_of_item'=>'hdd','producent_id'=>'13','capacity'=>'4000','type'=>'HDD'],
            ['name'=>'WesternDigital Black 500GB','zdj'=>'../images/DYSKI/wd3.png','type_of_item'=>'hdd','producent_id'=>'13','capacity'=>'500','type'=>'HDD'],
        ];

        Hdd::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hdds');
    }
}

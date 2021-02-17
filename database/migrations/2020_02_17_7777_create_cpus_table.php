<?php

use App\Cpu;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('zdj');
            $table->text('type_of_item');
            $table->unsignedBigInteger('producent_id');
            $table->foreign('producent_id')->references('id')->on('producents');
            $table->unsignedBigInteger('socket_id');
            $table->foreign('socket_id')->references('id')->on('sockets');
            $table->text('series');
            $table->integer('cores');
            $table->integer('core_timing');
            $table->integer('threats');
            $table->integer('power');
            $table->timestamps();
        });
        $data = [
            ['name'=>'Intel Core i9-9900K','zdj'=>'../images/CPU/intel4.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i9','cores'=>'8','core_timing'=>'3600','threats'=>'16','power'=>'128'],
            ['name'=>'Intel Core i9-9900','zdj'=>'../images/CPU/intel7.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i9','cores'=>'8','core_timing'=>'3100','threats'=>'16','power'=>'108'],
            ['name'=>'Intel Core i7-9700K','zdj'=>'../images/CPU/intel1.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i7','cores'=>'8','core_timing'=>'3600','threats'=>'8','power'=>'158'],
            ['name'=>'Intel Core i7-9700F','zdj'=>'../images/CPU/intel1.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i7','cores'=>'8','core_timing'=>'3000','threats'=>'8','power'=>'128'],
            ['name'=>'Intel Core i7-9700','zdj'=>'../images/CPU/intel1.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i7','cores'=>'8','core_timing'=>'3000','threats'=>'8','power'=>'118'],
            ['name'=>'Intel Core i7-8700K','zdj'=>'../images/CPU/intel6.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i7','cores'=>'6','core_timing'=>'3600','threats'=>'12','power'=>'128'],
            ['name'=>'Intel Core i7-8700','zdj'=>'../images/CPU/intel12.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i7','cores'=>'6','core_timing'=>'3600','threats'=>'12','power'=>'108'],
            ['name'=>'Intel Core i7-7700','zdj'=>'../images/CPU/intel13.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i7','cores'=>'4','core_timing'=>'3600','threats'=>'8','power'=>'86'],
            ['name'=>'Intel Core i5-9600K','zdj'=>'../images/CPU/intel2.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i5','cores'=>'6','core_timing'=>'3700','threats'=>'6','power'=>'98'],
            ['name'=>'Intel Core i5-8600K','zdj'=>'../images/CPU/intel2.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i5','cores'=>'6','core_timing'=>'3600','threats'=>'6','power'=>'92'],
            ['name'=>'Intel Core i3-9100','zdj'=>'../images/CPU/intel3.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i3','cores'=>'4','core_timing'=>'3600','threats'=>'4','power'=>'58'],
            ['name'=>'Intel Core i3-9100F','zdj'=>'../images/CPU/intel3.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i3','cores'=>'4','core_timing'=>'3600','threats'=>'4','power'=>'64'],
            ['name'=>'Intel Core i3-8100','zdj'=>'../images/CPU/intel5.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i3','cores'=>'4','core_timing'=>'3600','threats'=>'4','power'=>'64'],
            ['name'=>'Intel Core i3-9350KF','zdj'=>'../images/CPU/intel5.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'i3','cores'=>'4','core_timing'=>'3800','threats'=>'4','power'=>'69'],
            ['name'=>'Intel Pentium G4560','zdj'=>'../images/CPU/intel8.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'Pentium','cores'=>'2','core_timing'=>'3800','threats'=>'4','power'=>'28'],
            ['name'=>'Intel Pentium G5400','zdj'=>'../images/CPU/intel9.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'Pentium','cores'=>'2','core_timing'=>'3700','threats'=>'4','power'=>'28'],
            ['name'=>'Intel Pentium G5420','zdj'=>'../images/CPU/intel10.png','type_of_item'=>'cpu','producent_id'=>'1','socket_id'=>'1','series'=>'Pentium','cores'=>'2','core_timing'=>'3800','threats'=>'4','power'=>'28'],
            ['name'=>'AMD Ryzen 9 3900X','zdj'=>'../images/CPU/amd4.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 9','cores'=>'12','core_timing'=>'3800','threats'=>'24','power'=>'228'],
            ['name'=>'AMD Ryzen 9 3950X','zdj'=>'../images/CPU/amd7.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 9','cores'=>'16','core_timing'=>'3500','threats'=>'32','power'=>'288'],
            ['name'=>'AMD Ryzen 7 3700X','zdj'=>'../images/CPU/amd2.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 7','cores'=>'8','core_timing'=>'3600','threats'=>'16','power'=>'156'],
            ['name'=>'AMD Ryzen 7 3800X','zdj'=>'../images/CPU/amd5.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 7','cores'=>'8','core_timing'=>'3900','threats'=>'16','power'=>'172'],
            ['name'=>'AMD Ryzen 7 2700X','zdj'=>'../images/CPU/amd12.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 7','cores'=>'8','core_timing'=>'3700','threats'=>'16','power'=>'158'],
            ['name'=>'AMD Ryzen 7 2700','zdj'=>'../images/CPU/amd12.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 7','cores'=>'8','core_timing'=>'3200','threats'=>'16','power'=>'148'],
            ['name'=>'AMD Ryzen 5 3600X','zdj'=>'../images/CPU/amd1.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 5','cores'=>'6','core_timing'=>'3800','threats'=>'12','power'=>'128'],
            ['name'=>'AMD Ryzen 5 3400G','zdj'=>'../images/CPU/amd8.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 5','cores'=>'4','core_timing'=>'3700','threats'=>'8','power'=>'100'],
            ['name'=>'AMD Ryzen 5 3600','zdj'=>'../images/CPU/amd8.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 5','cores'=>'6','core_timing'=>'3600','threats'=>'12','power'=>'128'],
            ['name'=>'AMD Ryzen 5 2600X','zdj'=>'../images/CPU/amd10.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 5','cores'=>'6','core_timing'=>'3600','threats'=>'12','power'=>'128'],
            ['name'=>'AMD Ryzen 5 1600 AF','zdj'=>'../images/CPU/amd10.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 5','cores'=>'6','core_timing'=>'3200','threats'=>'12','power'=>'108'],
            ['name'=>'AMD Ryzen 5 2600','zdj'=>'../images/CPU/amd10.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 5','cores'=>'6','core_timing'=>'3400','threats'=>'12','power'=>'118'],
            ['name'=>'AMD Ryzen 5 2400G','zdj'=>'../images/CPU/amd11.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 5','cores'=>'4','core_timing'=>'3600','threats'=>'8','power'=>'89'],
            ['name'=>'AMD Ryzen 3 3200G','zdj'=>'../images/CPU/amd6.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 3','cores'=>'4','core_timing'=>'3600','threats'=>'4','power'=>'82'],
            ['name'=>'AMD Ryzen 3 1200','zdj'=>'../images/CPU/amd3.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Ryzen 3','cores'=>'4','core_timing'=>'3100','threats'=>'4','power'=>'62'],
            ['name'=>'AMD Athlon 3000G','zdj'=>'../images/CPU/amd9.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Athlon','cores'=>'2','core_timing'=>'3500','threats'=>'4','power'=>'35'],
            ['name'=>'AMD Athlon 200GE','zdj'=>'../images/CPU/amd9.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Athlon','cores'=>'2','core_timing'=>'3200','threats'=>'4','power'=>'32'],
            ['name'=>'AMD Athlon 240GE','zdj'=>'../images/CPU/amd9.png','type_of_item'=>'cpu','producent_id'=>'2','socket_id'=>'2','series'=>'Athlon','cores'=>'2','core_timing'=>'3500','threats'=>'4','power'=>'32'],

            ];

        Cpu::insert($data);
    }


    public function down()
    {
        Schema::dropIfExists('cpus');
    }
}

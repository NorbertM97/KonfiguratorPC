<?php

use App\Cover;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('zdj');
            $table->text('type_of_item');
            $table->unsignedBigInteger('producent_id');
            $table->foreign('producent_id')->references('id')->on('producents');
            $table->unsignedBigInteger('compability_id');
            $table->foreign('compability_id')->references('id')->on('compabilities');
            $table->text('type');
            $table->integer('GPU_size');

            $table->timestamps();
        });

        $data = [
            ['name'=>'Signum SG1M','zdj'=>'../images/Obudowy/Silentium1.png','type_of_item'=>'cover','producent_id'=>'6','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'330'],
            ['name'=>'Signum SG1X TG','zdj'=>'../images/Obudowy/Silentium2.png','type_of_item'=>'cover','producent_id'=>'6','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'325'],
            ['name'=>'Armis AR5X TG','zdj'=>'../images/Obudowy/Silentium3.png','type_of_item'=>'cover','producent_id'=>'6','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'330'],
            ['name'=>'Armis AR7 TG','zdj'=>'../images/Obudowy/Silentium4.png','type_of_item'=>'cover','producent_id'=>'6','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'420'],
            ['name'=>'MAG Forge 100M','zdj'=>'../images/Obudowy/MSI1.png','type_of_item'=>'cover','producent_id'=>'3','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'350'],
            ['name'=>'MAG Vampiric 010M','zdj'=>'../images/Obudowy/MSI2.png','type_of_item'=>'cover','producent_id'=>'3','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'350'],
            ['name'=>'Mag Vampiric 010','zdj'=>'../images/Obudowy/MSI3.png','type_of_item'=>'cover','producent_id'=>'3','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'325'],
            ['name'=>'MAG Forge 101M','zdj'=>'../images/Obudowy/MSI4.png','type_of_item'=>'cover','producent_id'=>'3','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'325'],
            ['name'=>'MPG SEKIRA 500G','zdj'=>'../images/Obudowy/MSI5.png','type_of_item'=>'cover','producent_id'=>'3','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'400'],
            ['name'=>'MPG Sekira 500P','zdj'=>'../images/Obudowy/MSI6.png','type_of_item'=>'cover','producent_id'=>'3','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'400'],
            ['name'=>'MPG SEKIRA 500X','zdj'=>'../images/Obudowy/MSI7.png','type_of_item'=>'cover','producent_id'=>'3','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'400'],
            ['name'=>'MPG Gungnir 100P','zdj'=>'../images/Obudowy/MSI8.png','type_of_item'=>'cover','producent_id'=>'3','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'400'],
            ['name'=>'Carbide Series 100R','zdj'=>'../images/Obudowy/Corsair1.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'420'],
            ['name'=>'Obsidian 1000D','zdj'=>'../images/Obudowy/Corsair2.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'1','type'=>'Full Tower','GPU_size'=>'420'],
            ['name'=>'Crystal Series 280X','zdj'=>'../images/Obudowy/Corsair3.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'3','type'=>'Mini Tower','GPU_size'=>'240'],
            ['name'=>'Obsidian Series 350D','zdj'=>'../images/Obudowy/corsair4.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'2','type'=>'Micro Tower','GPU_size'=>'280'],
            ['name'=>'Crystal Series 280X WH','zdj'=>'../images/Obudowy/corsair5.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'3','type'=>'Mini Tower','GPU_size'=>'220'],
            ['name'=>'Crystal Series 280X BL','zdj'=>'../images/Obudowy/corsair6.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'3','type'=>'Mini Tower','GPU_size'=>'370'],
            ['name'=>'CARBIDE SERIES SPEC','zdj'=>'../images/Obudowy/Corsair7.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'1','type'=>'Mini Tower','GPU_size'=>'370'],
            ['name'=>'Obsidian Series 500D','zdj'=>'../images/Obudowy/Corsair8.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'1','type'=>'Mini Tower','GPU_size'=>'370'],
            ['name'=>'Crystal Series 680X','zdj'=>'../images/Obudowy/Corsair9.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'2','type'=>'Mini Tower','GPU_size'=>'280'],
            ['name'=>'Crystal Series 280X R','zdj'=>'../images/Obudowy/Corsair10.png','type_of_item'=>'cover','producent_id'=>'4','compability_id'=>'2','type'=>'Mini Tower','GPU_size'=>'220'],
            ['name'=>'ELITE 344B','zdj'=>'../images/Obudowy/CM1.png','type_of_item'=>'cover','producent_id'=>'15','compability_id'=>'2','type'=>'Mini Tower','GPU_size'=>'220'],
            ['name'=>'ELITE 110A czarna','zdj'=>'../images/Obudowy/CM2.png','type_of_item'=>'cover','producent_id'=>'15','compability_id'=>'3','type'=>'Mini Tower','GPU_size'=>'240'],
            ['name'=>'ELITE 110','zdj'=>'../images/Obudowy/CM3.png','type_of_item'=>'cover','producent_id'=>'15','compability_id'=>'3','type'=>'Mini Tower','GPU_size'=>'220'],
            ['name'=>'MasterCase MC600P','zdj'=>'../images/Obudowy/CM4.png','type_of_item'=>'cover','producent_id'=>'15','compability_id'=>'1','type'=>'Middle Tower','GPU_size'=>'280'],

        ];

        Cover::insert($data);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}

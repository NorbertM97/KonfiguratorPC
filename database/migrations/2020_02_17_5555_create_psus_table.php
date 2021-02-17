<?php

use App\Psu;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('zdj');
            $table->text('type_of_item');
            $table->unsignedBigInteger('producent_id');
            $table->foreign('producent_id')->references('id')->on('producents');
            $table->integer('power');
            $table->text('certificate');
            $table->timestamps();
        });


        $data = [
            ['name'=>'System Power 9 500W','zdj'=>'../images/PSU/bequiet1.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'500','certificate'=>'80 Plus Bronze'],
            ['name'=>'System Power 11 550W','zdj'=>'../images/PSU/bequiet7.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'550','certificate'=>'80 Plus Gold'],
            ['name'=>'System Power 9 600W','zdj'=>'../images/PSU/bequiet9.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'600','certificate'=>'80 Plus Bronze'],
            ['name'=>'System Power 9 700W','zdj'=>'../images/PSU/bequiet13.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'700','certificate'=>'80 Plus Bronze'],
            ['name'=>'Pure Power 11 CM 500W','zdj'=>'../images/PSU/bequiet5.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'500','certificate'=>'80 Plus Gold'],
            ['name'=>'Pure Power 11 CM 600W','zdj'=>'../images/PSU/bequiet10.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'600','certificate'=>'80 Plus Gold'],
            ['name'=>'Pure Power 11 500W','zdj'=>'../images/PSU/bequiet6.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'500','certificate'=>'80 Plus Gold'],
            ['name'=>'Pure Power 11 700W','zdj'=>'../images/PSU/bequiet14.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'700','certificate'=>'80 Plus Gold'],
            ['name'=>'Straight Power 11 750W','zdj'=>'../images/PSU/bequiet2.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'750','certificate'=>'80 Plus Gold'],
            ['name'=>'Straight Power 11 650W','zdj'=>'../images/PSU/bequiet11.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'650','certificate'=>'80 Plus Gold'],
            ['name'=>'Straight Power 11 550W','zdj'=>'../images/PSU/bequiet8.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'550','certificate'=>'80 Plus Platinum'],
            ['name'=>'Straight Power 11 850W','zdj'=>'../images/PSU/bequiet2.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'850','certificate'=>'80 Plus Gold'],
            ['name'=>'Straight Power 11 650W','zdj'=>'../images/PSU/bequiet12.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'850','certificate'=>'80 Plus Platinum'],
            ['name'=>'Pure Power 11 CM 700W','zdj'=>'../images/PSU/bequiet3.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'700','certificate'=>'80 Plus Gold'],
            ['name'=>'Pure Power 11 600W','zdj'=>'../images/PSU/bequiet15.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'600','certificate'=>'80 Plus Gold'],
            ['name'=>'VS550 550W','zdj'=>'../images/PSU/corsair1.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'550','certificate'=>'80 Plus'],
            ['name'=>'RMx 650W','zdj'=>'../images/PSU/corsair2.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'650','certificate'=>'80 Plus Gold'],
            ['name'=>'RMx 850W','zdj'=>'../images/PSU/rmx850.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'850','certificate'=>'80 Plus Gold'],
            ['name'=>'RMx 750W','zdj'=>'../images/PSU/corsair5.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'750','certificate'=>'80 Plus Gold'],
            ['name'=>'CX650 650W','zdj'=>'../images/PSU/corsair3.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'650','certificate'=>'80 Plus Bronze'],
            ['name'=>'CV 550W','zdj'=>'../images/PSU/corsair4.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'550','certificate'=>'80 Plus Bronze'],
            ['name'=>'HX750 750W','zdj'=>'../images/PSU/corsair6.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'750','certificate'=>'80 Plus Platinum'],
            ['name'=>'CX750M 750W','zdj'=>'../images/PSU/corsair7.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'750','certificate'=>'80 Plus Bronze'],
            ['name'=>'TX850M 850W','zdj'=>'../images/PSU/corsair8.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'850','certificate'=>'80 Plus Gold'],
            ['name'=>'DarkPower ProP11 850W','zdj'=>'../images/PSU/corsair9.png','type_of_item'=>'psu','producent_id'=>'7','power'=>'850','certificate'=>'80 Plus Platinum'],
            ['name'=>'HX850i 850W','zdj'=>'../images/PSU/corsair10.png','type_of_item'=>'psu','producent_id'=>'8','power'=>'850','certificate'=>'80 Plus Platinum'],
        ];

        Psu::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psus');
    }
}

<?php

use App\Ram;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('zdj');
            $table->text('type_of_item');
            $table->unsignedBigInteger('producent_id');
            $table->foreign('producent_id')->references('id')->on('producents');
            $table->integer('memory');
            $table->integer('latency');
            $table->integer('timing');
            $table->text('typ');

            $table->timestamps();
        });

        $data = [
            ['name'=>'Ripjaws V 16GB CL16 3200','zdj'=>'../images/Ram/gskill1.png','type_of_item'=>'rams','producent_id'=>'9','memory'=>'16','latency'=>'16','timing'=>'3200','typ'=>'DDR4'],
            ['name'=>'Trident Z RGB 32GB CL16 3600','zdj'=>'../images/Ram/gskill2.png','type_of_item'=>'rams','producent_id'=>'9','memory'=>'32','latency'=>'16','timing'=>'3600','typ'=>'DDR4'],
            ['name'=>'Trident Z RGB 32GB CL16 3200','zdj'=>'../images/Ram/gskill3.png','type_of_item'=>'rams','producent_id'=>'9','memory'=>'32','latency'=>'16','timing'=>'3200','typ'=>'DDR4'],
            ['name'=>'Trident Z RGB 32GB CL14 3000','zdj'=>'../images/Ram/gskill4.png','type_of_item'=>'rams','producent_id'=>'9','memory'=>'32','latency'=>'14','timing'=>'3000','typ'=>'DDR4'],
            ['name'=>'Aegis 16GB CL16 3000','zdj'=>'../images/Ram/gskill5.png','type_of_item'=>'rams','producent_id'=>'9','memory'=>'16','latency'=>'16','timing'=>'3000','typ'=>'DDR4'],
            ['name'=>'Aegis 16GB CL17 2400','zdj'=>'../images/Ram/gskill5.png','type_of_item'=>'rams','producent_id'=>'9','memory'=>'16','latency'=>'17','timing'=>'2400','typ'=>'DDR4'],
            ['name'=>'Ripjaws V 64GB CL15 3200','zdj'=>'../images/Ram/gskill6.png','type_of_item'=>'rams','producent_id'=>'9','memory'=>'64','latency'=>'15','timing'=>'3200','typ'=>'DDR4'],
            ['name'=>'IRIDIUM 16GB CL16 3200','zdj'=>'../images/Ram/goodram1.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'16','latency'=>'16','timing'=>'3200','typ'=>'DDR4'],
            ['name'=>'IRIDIUM PRO 16GB CL17 3600','zdj'=>'../images/Ram/goodram2.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'16','latency'=>'17','timing'=>'3600','typ'=>'DDR4'],
            ['name'=>'IRIDIUM PRO 32GB CL17 3600','zdj'=>'../images/Ram/goodram8.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'32','latency'=>'17','timing'=>'3600','typ'=>'DDR4'],
            ['name'=>'IRIDIUM PRO 8GB CL17 2400','zdj'=>'../images/Ram/goodram3.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'8','latency'=>'17','timing'=>'2400','typ'=>'DDR4'],
            ['name'=>'IRIDIUM PRO 8GB CL15 2133','zdj'=>'../images/Ram/goodram4.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'8','latency'=>'15','timing'=>'2133','typ'=>'DDR4'],
            ['name'=>'IRIDIUM X 8GB CL16 3000','zdj'=>'../images/Ram/goodram5.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'8','latency'=>'16','timing'=>'3000','typ'=>'DDR4'],
            ['name'=>'Play Black 8GB CL15 3000','zdj'=>'../images/Ram/goodram6.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'8','latency'=>'15','timing'=>'3000','typ'=>'DDR4'],
            ['name'=>'IRIDIUM 8GB CL15 2133','zdj'=>'../images/Ram/goodram5.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'8','latency'=>'15','timing'=>'2133','typ'=>'DDR4'],
            ['name'=>'IRIDIUM 16GB CL15 2133','zdj'=>'../images/Ram/goodram5.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'16','latency'=>'15','timing'=>'2133','typ'=>'DDR4'],
            ['name'=>'GOODRAM 8GB CL15 2133','zdj'=>'../images/Ram/goodram7.png','type_of_item'=>'rams','producent_id'=>'10','memory'=>'8','latency'=>'15','timing'=>'2133','typ'=>'DDR4'],
            ['name'=>'Vengeance LPX 16GB CL16 3000','zdj'=>'../images/Ram/corsair1.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'16','latency'=>'16','timing'=>'3000','typ'=>'DDR4'],
            ['name'=>'Vengeance LP 8GB CL14 2400','zdj'=>'../images/Ram/corsair2.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'8','latency'=>'14','timing'=>'2400','typ'=>'DDR4'],
            ['name'=>'Vengeance L 64GB CL16 2400','zdj'=>'../images/Ram/corsair3.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'64','latency'=>'16','timing'=>'2400','typ'=>'DDR4'],
            ['name'=>'Vengeance Lpx 64GB CL16 2400','zdj'=>'../images/Ram/corsair3.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'64','latency'=>'16','timing'=>'2400','typ'=>'DDR4'],
            ['name'=>'Vengeance LPX 32GB CL16 3200','zdj'=>'../images/Ram/corsair4.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'32','latency'=>'16','timing'=>'3200','typ'=>'DDR4'],
            ['name'=>'Vengeance LPX 32GB CL16 3000','zdj'=>'../images/Ram/corsair6.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'32','latency'=>'16','timing'=>'3000','typ'=>'DDR4'],
            ['name'=>'Vengeance RGB 32GB CL15 3000','zdj'=>'../images/Ram/corsair8.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'32','latency'=>'15','timing'=>'3000','typ'=>'DDR4'],
            ['name'=>'Dominator RGB 32GB CL15 3000','zdj'=>'../images/Ram/corsair7.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'32','latency'=>'15','timing'=>'3000','typ'=>'DDR4'],
            ['name'=>'Vengeance LPX 16GB CL14 2400','zdj'=>'../images/Ram/corsair5.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'16','latency'=>'14','timing'=>'2400','typ'=>'DDR4'],
            ['name'=>'Vengeance LPX 16GB CL15 3000','zdj'=>'../images/Ram/corsair5.png','type_of_item'=>'rams','producent_id'=>'8','memory'=>'16','latency'=>'15','timing'=>'3000','typ'=>'DDR4'],
        ];

        Ram::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rams');
    }
}

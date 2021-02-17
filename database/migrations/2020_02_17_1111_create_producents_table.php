<?php

use App\Producent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->timestamps();
        });

        $data = [
            ['name'=>'Intel'],
            ['name'=>'AMD'],
            ['name' => 'MSI'],
            ['name' => 'Corsair'],
            ['name' => 'Gigabyte'],
            ['name' => 'SilentiumPC'],
            ['name' => 'beQuiet'],
            ['name' => 'Corsair'],
            ['name' => 'GSKILL'],
            ['name' => 'GoodRam'],
            ['name' => 'Nvidia'],
            ['name' => 'Samsung'],
            ['name' => 'WD'],
            ['name' => 'Seagate'],
            ['name' => 'CoolerMaster'],
        ];

        Producent::insert($data);

    }


    public function down()
    {
        Schema::dropIfExists('producents');
    }
}

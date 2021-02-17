<?php

use App\Compability;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->timestamps();
        });

        $data = [
            ['name'=>'ATX'],
            ['name'=>'microATX'],
            ['name'=>'miniITX'],
        ];

        Compability::insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compabilities');
    }
}

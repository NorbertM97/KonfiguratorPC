<?php

use App\Socket;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sockets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->timestamps();
        });

        $data = [
            ['name'=>'1151'],
            ['name'=>'AM4'],
        ];

        Socket::insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sockets');
    }
}

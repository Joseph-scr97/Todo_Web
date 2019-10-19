<?php
// command : php artisan make:migration create_table_todos --table="todos"

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTodos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table -> bigIncrements ( 'id' );
            $table -> string ( 'title' );
            $table -> text ( 'description' );
            $table -> boolean ( 'status' ) -> default ( false );
            $table -> timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}

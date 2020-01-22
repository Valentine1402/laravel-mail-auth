<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //per una relazione 1 a N qui si inserisce l'1(quindi post);
        //per ogni categoria(N) c'è un post(1),per ogni post(1) ci sono piu categorie(N)
        Schema::table('posts', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned()->index();//aggiunge la colonna
            $table->foreign('category_id', 'post_category')//relazione con la employee
            ->references('id')// relaziona l'id
            ->on('categories');//della tabella employee
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('post_category');//elimina la relazione
            $table->dropColumn('category_id');//elimina la colonna a riga 16 
        });
    }
}

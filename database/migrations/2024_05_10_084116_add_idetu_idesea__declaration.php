<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdetuIdeseaDeclaration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('declarations', function (Blueprint $table) {
            //ajout des cles etrangeres id_seance et id_etudisnt dans la table declaration
            $table->foreignId('id_etu')->constrained('etudiants')
            ->onDelete('cascade');


            $table->foreignId('id_sea')->constrained('seances')
            ->onDelete('cascade');

           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('declarations', function (Blueprint $table) {   
            //
        });
    }
}

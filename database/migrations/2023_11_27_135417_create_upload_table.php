<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {    
        Schema::table('taches', function (Blueprint $table) {        
            $table->string('image')->nullable();    
            
        }); 
    }
    
    public function down() {
        Schema::table('taches', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
    // Cette fonction down() supprimera la colonne photo de la table taches lorsque la migration est annulée.
};

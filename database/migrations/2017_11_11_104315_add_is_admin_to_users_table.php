<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsAdminToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           // if(!Schema::hasColumn('users','is_admin')){
           //      $table->string('is_admin')->default(0);
           //  }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
             if(Schema::hasColumn('users','is_admin')){
                $table->dropColumn('is_admin');
            }
        });
    }
}

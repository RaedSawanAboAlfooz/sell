<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_comments', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table ->bigInteger ('image_user_id');//image_profile_user_name
            // $table ->string ('image_profile_user_name');//
            $table->bigInteger('count_like');
            $table ->string ('user_name');
            $table->bigInteger('comment_id'); // basec comment id
            $table->bigInteger('user_id'); //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_comments');
    }
}

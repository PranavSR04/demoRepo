<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id('c_id');
            $table->string('contractId');
            $table->string('msaId');

            $table->unsignedBigInteger('added_by');
            $table->foreign('added_by')->references('id')->on('users');
            $table->string('contractType');
            $table->date('dateOfSignature');
            $table->text('remarks');
            $table->date('startDate');
            $table->date('endDate');
            $table->decimal('estimated_amount');
            $table->string('doc_link');
            $table->string('projectTerm');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};

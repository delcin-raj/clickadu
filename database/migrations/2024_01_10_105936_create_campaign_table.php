<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campaign', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('format');
            $table->string('size');
            $table->string('feed');
            $table->string('vertical');
            $table->string('status');
            $table->timestamps(); // optional, for created_at and updated_at
            // insert into campaign (name, format, size, feed, vertical, status) values ("name1", "format1", "size1", "feed1", "vertical1", "status1")
            // insert into campaign (name, format, size, feed, vertical, status) values ("name2", "format2", "size2", "feed2", "vertical2", "status2")
            // insert into campaign (name, format, size, feed, vertical, status) values ("name3", "format3", "size3", "feed3", "vertical3", "status3")
            // insert into campaign (name, format, size, feed, vertical, status) values ("name4", "format4", "size4", "feed4", "vertical4", "status4")
            // insert into campaign (name, format, size, feed, vertical, status) values ("name5", "format5", "size5", "feed5", "vertical5", "status5")
            // insert into campaign (name, format, size, feed, vertical, status) values ("name6", "format6", "size6", "feed6", "vertical6", "status6")
            // insert into campaign (name, format, size, feed, vertical, status) values ("name7", "format7", "size7", "feed7", "vertical7", "status7")
            // insert into campaign (name, format, size, feed, vertical, status) values ("name8", "format8", "size8", "feed8", "vertical8", "status8")
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign');
    }
};

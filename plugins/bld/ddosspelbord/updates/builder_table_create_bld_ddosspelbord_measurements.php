<?php
/*
 * Copyright (C) 2024 Anti-DDoS Coalitie Netherlands (ADC-NL)
 *
 * This file is part of the DDoS gameboard.
 *
 * DDoS gameboard is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * DDoS gameboard is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; If not, see @link https://www.gnu.org/licenses/.
 *
 */

namespace bld\ddosspelbord\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class builderTableCreateBldDdosspelbordMeasurements extends Migration
{
    public function up()
    {
        Schema::create('bld_ddosspelbord_measurements', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('target_id')->unsigned()->nullable();
            $table->integer('average_ttc')->nullable();
            $table->integer('average_rt')->nullable();
            $table->integer('succesrate')->nullable();
            $table->integer('errorcodes')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bld_ddosspelbord_measurements');
    }
}

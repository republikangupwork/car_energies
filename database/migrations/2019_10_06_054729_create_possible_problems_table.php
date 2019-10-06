<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePossibleProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('possible_problems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('problem');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        DB::table('possible_problems')->insert(
            array(
                array('problem' => 'Alternator'),
                array('problem' => 'Drive Shaft'),
                array('problem' => 'Junction Box'),
                array('problem' => 'Shift'),
                array('problem' => 'Breaking System'),
                array('problem' => 'Electrical System'),
                array('problem' => 'Knuckle'),
                array('problem' => 'Seats'),
                array('problem' => 'Battery'),
                array('problem' => 'Engine/Monitor'),
                array('problem' => 'Lights, Front'),
                array('problem' => 'Shock Absorbers'),
                array('problem' => 'Cooling System'),
                array('problem' => 'Exhaust System'),
                array('problem' => 'Lights, Back'),
                array('problem' => 'Steering Wheel'),
                array('problem' => 'Cylinders'),
                array('problem' => 'Fuses'),
                array('problem' => 'Moon/Sunroof'),
                array('problem' => 'Tires'),
                array('problem' => 'Crankshaft'),
                array('problem' => 'Four-wheel Drive'),
                array('problem' => 'Mud Flap'),
                array('problem' => 'Transmission'),
                array('problem' => 'Clutch'),
                array('problem' => 'Frame'),
                array('problem' => 'Muffler'),
                array('problem' => 'Trank'),
                array('problem' => 'Computrer'),
                array('problem' => 'Fuel System'),
                array('problem' => 'Output Shaft'),
                array('problem' => 'Tail Pipe'),
                array('problem' => 'Drum Brakes'),
                array('problem' => 'Gear Box'),
                array('problem' => 'Pedal'),
                array('problem' => 'Undercarriage Leak'),
                array('problem' => 'Differential'),
                array('problem' => 'Gasket'),
                array('problem' => 'Piston'),
                array('problem' => 'Valve Visor'),
                array('problem' => 'Door Locks'),
                array('problem' => 'Hood'),
                array('problem' => 'Radiator'),
                array('problem' => 'Wheel'),
                array('problem' => 'Drive Belt'),
                array('problem' => 'Handle'),
                array('problem' => 'Signals'),
                array('problem' => 'Windows'),
                array('problem' => 'Other Sources of Negative Energies'),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('possible_problems');
    }
}

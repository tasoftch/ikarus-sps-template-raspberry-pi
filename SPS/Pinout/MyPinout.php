<?php

namespace MySPS\Pinout;

// use Ikarus\SPS\Raspberry\Pinout\Revision_1\AbstractBCMPinout;
// use Ikarus\SPS\Raspberry\Pinout\Revision_2\AbstractBCMPinout;
use Ikarus\SPS\Raspberry\Pinout\Revision_3\AbstractBCMPinout;

// use Ikarus\SPS\Raspberry\Pinout\Revision_1\AbstractBoardPinout;
// use Ikarus\SPS\Raspberry\Pinout\Revision_2\AbstractBoardPinout;
// use Ikarus\SPS\Raspberry\Pinout\Revision_3\AbstractBoardPinout;

// use Ikarus\SPS\Raspberry\Pinout\Revision_1\AbstractWpiPinout;
// use Ikarus\SPS\Raspberry\Pinout\Revision_2\AbstractWpiPinout;
// use Ikarus\SPS\Raspberry\Pinout\Revision_3\AbstractWpiPinout;



/**
 * The pinout instance specifies to the plugin, which pins are used.
 * The Raspberry Pi main plugin will check for conflicts and enable the required pins to the plugin.
 *
 * @package MySPS\Pinout
 */
class MyPinout extends AbstractBCMPinout
{
	// AL = Active Low, means the value is true if the pin's current is 0v (pulled to ground).
	// Makes sense to register a pull up resistor.
	const MY_AL_SENSOR_PIN = 17;

	// The actor pin can be set to high (3.3v) or low (0v).
	const MY_ACTOR_PIN = 10;

	// The PWM pin can be set to a value between 0 and 1.
	//   This value gets converted into a equal value between 0 and 1023.
	//   The Pi can only set a pin to low or high so the PWM changes very quickly between low and high to reach the specified value in volts.
	const MY_PULSE_WITH_MODULATION_PIN = 18;

	// AH => active high, the value is true if the current is high.
	const MY_AH_SENSOR_PIN = 9;


	// Specify the pin usage

	protected $inputPins = [
		// List all required input pins here with one of the following resistor specification:
		// self::INPUT_RESISTOR_DOWN 		= pulls the pin's current to ground (with 10kΩ)
		// self::INPUT_RESISTOR_UP			= pulls the pin's current to 3.3v (with 10kΩ)
		// self::INPUT_RESISTOR_NONE		= removes any resistor, the pin "floats"


		self::MY_AL_SENSOR_PIN => self::INPUT_RESISTOR_UP,
		self::MY_AH_SENSOR_PIN => self::INPUT_RESISTOR_DOWN
	];

	protected $activeLowPins = [
		// Specify any pin here which is active low.
		// This simply switch the value 0 to 1 and 1 to 0.

		self::MY_AL_SENSOR_PIN
	];

	protected $outputPins = [
		// Specify the output pins here.
		// To enable the PWM, just set the value to true here.

		self::MY_ACTOR_PIN => false,
		self::MY_PULSE_WITH_MODULATION_PIN => true
	];
}
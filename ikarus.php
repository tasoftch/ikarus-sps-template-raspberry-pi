<?php
/**
 * This is an example SPS runner file.
 * Your device should execute it to use the SPS.
 *
 * Example:
 *    Raspberry Pi:
 * 		Add the following lines to the /
 */

use Ikarus\SPS\CyclicEngine;

/// Creates the SPS instance which updates five times per second.
$SPS = new CyclicEngine(5);

// If you don't add a plugin for an explicit exit of the SPS, it will never exit unless an error occures.
// There are several plugins to explicit stop the SPS:
// Ikarus\SPS\Plugin\Cyclic\StopEngineAfterCycleCountPlugin
// Ikarus\SPS\Plugin\Cyclic\StopEngineAfterIntervalPlugin
// Ikarus\SPS\Plugin\Cyclic\StopEngineAtDatePlugin
// Ikarus\SPS\Plugin\Cyclic\StopEngineIfFileExistsPlugin
// Ikarus\SPS\Plugin\Cyclic\CharInput\StopEngineOnCharacterInput


$SPS->addPlugin(
	new \MySPS\Plugin\MyPlugin('my-plugin')
);


// Run the SPS.
$SPS->run();
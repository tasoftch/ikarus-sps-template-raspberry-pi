<?php

namespace MySPS\Plugin;


use Ikarus\SPS\Plugin\Management\CyclicPluginManagementInterface;
use Ikarus\SPS\Raspberry\Pinout\PinoutInterface;
use Ikarus\SPS\Raspberry\Plugin\Cyclic\AbstractCyclicPlugin;
use MySPS\Pinout\MyPinout;

class MyPlugin extends AbstractCyclicPlugin
{
	/**
	 * @inheritDoc
	 */
	public function makePinout(): PinoutInterface
	{
		return new MyPinout();
	}

	/**
	 * @inheritDoc
	 */
	public function update(CyclicPluginManagementInterface $pluginManagement)
	{
		// TODO: Implement your plugin's update cycle method.
	}
}
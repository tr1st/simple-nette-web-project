<?php declare(strict_types = 1);

namespace Contributte\Bootstrap\Plugin;

use Nette\Configurator;
use Nette\DI\Container;

interface IDebugContainerPlugin extends IPlugin
{

	public function plugin(Configurator $configurator, Container $container): void;

}

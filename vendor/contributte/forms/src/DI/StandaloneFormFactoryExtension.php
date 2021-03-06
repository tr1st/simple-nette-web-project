<?php declare(strict_types = 1);

namespace Contributte\Forms\DI;

use Contributte\Forms\IStandaloneFormFactory;
use Nette\DI\CompilerExtension;

class StandaloneFormFactoryExtension extends CompilerExtension
{

	/**
	 * Register services
	 */
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('factory'))
			->setImplement(IStandaloneFormFactory::class);
	}

}

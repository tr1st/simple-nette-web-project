<?php declare(strict_types = 1);

namespace Contributte\Tracy\DI;

use Contributte\Tracy\NavigationPanel;
use Nette\Application\IPresenterFactory;
use Nette\Application\LinkGenerator;
use Nette\Application\UI\Presenter;
use Nette\DI\CompilerExtension;
use Nette\DI\Statement;

class NavigationPanelExtension extends CompilerExtension
{

	/** @var mixed[] */
	private $defaults = [];

	public function loadConfiguration(): void
	{
		$this->validateConfig($this->defaults);
	}

	public function beforeCompile(): void
	{
		$builder = $this->getContainerBuilder();

		$presenters = $builder->findByType(Presenter::class);
		foreach ($presenters as $key => $presenter) {
			$presenters[$key] = $presenter->getType();
		}

		$builder
			->getDefinition('tracy.bar')
			->addSetup('addPanel', [
				new Statement(
					NavigationPanel::class,
					[$builder->getDefinitionByType(IPresenterFactory::class), $builder->getDefinitionByType(LinkGenerator::class), $presenters]
				),
				$this->prefix('navigation'),
			]);
	}

}

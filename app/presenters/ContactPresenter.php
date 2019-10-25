<?php declare(strict_types = 1);

namespace App\Presenters;

use Nette\Application\UI\Form;

class ContactPresenter extends BasePresenter
{

	protected function createComponentForm(): Form
	{
		$form = new Form();

		$form->addText('name', 'Name');

		$form->addSubmit('send', 'Send!');

		$form->onSuccess[] = function (Form $form): void {
			if ($form->values->name === 'nette') {
				$this->flashMessage('It is alive!', 'success');
				$this->redirect('Homepage:');
			}

			dump($form->values);
		};

		return $form;
	}

}

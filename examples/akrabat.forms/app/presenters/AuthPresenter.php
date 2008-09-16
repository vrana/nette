<?php

/*use Nette::Environment;*/
/*use Nette::Security::AuthenticationException;*/

require_once dirname(__FILE__) . '/BasePresenter.php';


class AuthPresenter extends BasePresenter
{
	/** @persistent */
	public $backlink = '';



	public function presentLogin($backlink)
	{
		$form = new AppForm($this, 'form');
		$form->addText('username', 'Username:')
			->addRule(Form::FILLED, 'Please provide an username.');

		$form->addPassword('password', 'Password:')
			->addRule(Form::FILLED, 'Please provide a password.');

		$form->addSubmit('login', 'Login');
		$form->onSubmit[] = array($this, 'loginFormSubmitted');

		$this->template->form = $form;
		$this->template->title = "Log in";
	}



	public function loginFormSubmitted($form)
	{
		try {
			require_once 'models/Users.php';
			$user = Environment::getUser();
			$user->authenticate($form['username']->getValue(), $form['password']->getValue());
			$user->restoreRequest($this->backlink);
			$this->redirect('Dashboard:');

		} catch (AuthenticationException $e) {
			$form->addError('Login failed.');
		}
	}


}
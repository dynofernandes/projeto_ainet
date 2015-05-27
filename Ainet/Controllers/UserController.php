<?php namespace Ainet\Controllers;

use Ainet\Models\User;
use Ainet\Support\InputHelper;

class UserController
{
	public function __construct()
	{

	}

	public function listUsers ()
	{
		return User::all();
	}

	public function addUser()
	{

		$user = new User;
		$errors = false;

		if(empty($_POST)) {
			return[$user, false];
		}

		$errors = $this->validateInput($user);
		if (empty($errors)){
			User::add($user);
		}

		return[$user, $errors];
	}

	public function statusUser(){

		$id = InputHelper::get('user_id');
		User::status($id);
	}

	public function editUser(){

		if(empty($_POST)){
			$id = InputHelper::get('user_id');
			if($id == null) {
				header('Location: http://192.168.56.101/final_project/admin-user-list.php');//manda para a página admin-user-list.php
			}

			//como é  a primeira vez não tem erros envia false
			return [User::find($id),false];
		}
		$user = new User();
		$errors = $this->validateInput($user, false);
		if (empty($errors)){
			User::save($user);
		}
		return[$user, $errors];
	}

	public function deleteUser(){

		$id = InputHelper::get('user_id');
		User::delete($id);
	}

	/**
	 * Recebe user vazio - preenche user - retorna array com erros
	 */

	public function validateInput ($user, $validatepassword = true)
	{
		$user->id= InputHelper::post('user_id');
		$user->name = InputHelper::post('name');
		$user->email = InputHelper::post('email');
		$user->alt_email = InputHelper::post('alt_email');
		$user->password = InputHelper::post('password');
		$passwordConfirmation = InputHelper::post('passwordConfirmation');
		//$user->institution_id = InputHelper::post('institution_id');
		//$user->position = InputHelper::post('position');
		$user->photo_url = InputHelper::post('photo_url');
		$user->profile_url = InputHelper::post('profile_url');
		//$user->flags = InputHelper::post('flags');
		//$user->role = InputHelper::post('role');
		$errors = [];

		if($user->name) {
			if(!preg_match("/^[a-zA-Z ]+$/",$user->name)) {
				$errors['name'] = 'Nome Inválido';
			}
		}

		if($user->email) {
			$validemail = filter_var($user->email, FILTER_VALIDATE_EMAIL);
			if(!$validemail) {
				$errors['email'] = 'Formato de Email Inválido';
			}
		}else {
			$errors['email'] = 'Email é obrigatório';
		}

		if($user->alt_email) {
			$validemail = filter_var($user->alt_email, FILTER_VALIDATE_EMAIL);
			if (!$validemail) {
				$errors['alt_email'] = 'Formato de Email Inválido';
			}
		}

		if($validatepassword){
			if(strlen($user->password)<8) {
				$errors['password'] = 'Password tem de ter pelo menos 8 caracteres';
			}
			elseif($user->password != $passwordConfirmation) {
				$errors['password'] = 'Passwords don\'t match';
			}
		}

		if($user->photo_url) {
			$validurl = filter_var($user->photo_url, FILTER_VALIDATE_URL);
			if (!$validurl) {
				$errors['photo_url'] = 'URL Inválido';
			}
		}

		if($user->profile_url) {
			$validurl = filter_var($user->profile_url, FILTER_VALIDATE_URL);
			if (!$validurl) {
			$errors['profile_url'] = 'URL Inválido';
			}
		}

		return $errors;
	}
}
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

	public function editUser(){

		if(empty($_POST)){
			$id = InputHelper::get('user_id');
			if($id == null) {
				header('Location: http://192.168.56.101/final_project/admin-dashboard.php');//manda para a página admin-dashboard.php

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

	/**
	 * Recebe user vazio - preenche user - retorna array com erros
	 */

	public function validateInput ($user, $validatepassword= true)
	{
		$user->id= InputHelper::post('user_id');
		$user->fullname = InputHelper::post('fullname');
		$user->email = InputHelper::post('email');
		$user->password = InputHelper::post('password');
		$passwordConfirmation = InputHelper::post('passwordConfirmation'); //*Variavel local com o mesmo nome (podia ser diferente) da variavel global password */
		$user->type = InputHelper::post('type');
		$errors = [];

		if($user->fullname) {
			if(!preg_match("/^[a-zA-Z ]+$/",$user->fullname)) {
				$errors['fullname'] = 'Invalid Fullname';
			}
		}
		if($user->email) {
			$validemail = filter_var($user->email, FILTER_VALIDATE_EMAIL);
			if(!$validemail) {
				$errors['email'] = 'Invalid Email Format';
			}
		}else {
			$errors['email'] = 'Email is Required';
		}

		if($validatepassword){
			if(strlen($user->password)<8) {
				$errors['password'] = 'Password must have at least 8 characters';
			}
			elseif($user->password != $passwordConfirmation) {
				$errors['password'] = 'Passwords don\'t match';
			}
		}

		return $errors;
	}
}
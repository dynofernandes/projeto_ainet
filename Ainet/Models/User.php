<?php namespace Ainet\Models;

class User extends AbstractModel
{
	public $id;
	public $name;
	public $email;
	public $alt_email;
	public $password;
	public $institution_id;
	public $position;
	public $photo_url;
	public $profile_url;
	public $flags;
	public $role;
	public $remember_token;
	public $created_at;
	public $updated_at;

	public function __construct($id=null, $name=null, $email=null, $alt_email=null, $password=null, $institution_id=null, $position=null,
	                            $photo_url=null, $profile_url=null, $flags=null, $role=null, $remember_token=null, $created_at=null,
	                            $updated_at=null)
	{
		if(isset($id)) {
			$this->id = $id;
		}

		if(isset($name)) {
			$this->name = $name;
		}

		if(isset($email)) {
			$this->email= $email;
		}

		if(isset($alt_email)) {
			$this->alt_email = $alt_email;
		}

		if(isset($password)) {
			$this->password = $password;
		}

		if(isset($institution_id)) {
			$this->institution_id = $institution_id;
		}

		if(isset($position)) {
			$this->position = $position;
		}

		if(isset($photo_url)) {
			$this->photo_url = $photo_url;
		}

		if(isset($profile_url)) {
			$this->profile_url = $profile_url;
		}

		if(isset($flags)) {
			$this->flags = $flags;
		}

		if(isset($role)) {
			$this->role = $role;
		}

		if(isset($remember_token)) {
			$this->remember_token = $remember_token;
		}

		if(isset($created_at)) {
			$this->created_at = $created_at;
		}

		if(isset($updated_at)) {
			$this->updated_at = $updated_at;
		}
	}

	public static function all()
	{
		$result = AbstractModel::dbQuery('select * from users');
		$users = [];
		if ($result) {
			while ($user = $result->fetch_object('Ainet\Models\User')) {
				array_push($users, $user);
			}
		}
		return $users;
	}

	public static function find($id)
	{
		$users = self::all();
		if (array_key_exists($id, $users)) {
			return $users[$id];
		}
		return null;
	}

	public static function findByEmail($email)
	{
		$users = self::all();
		foreach($users as $id => $user) {
			if($user->email==$email) {
				return $user;
			}
		}
		return null;
	}

	public static function add($user)
	{
		$query = 'insert into users (name,email,alt_email,password,institution_id,position,photo_url,profile_url,flags,role)
			values(?,?,?,?,?,?,?,?,?,?)';
		$conn = self::dbConnection();
		$stm = $conn->prepare($query);
		if($stm) {
			$stm->bind_param("ssssisssii",$user->name,$user->email,$user->alt_email,$user->password,$user->institution_id,$user->position,
				$user->photo_url,$user->profile_url,$user->flags,$user->role);
			if($stm->execute()) {
				header('Location: http://192.168.56.101/final_project/admin-user-list.php');
				exit(0);
			} else {

			}
		}
	}

	public static function status($id)
	{
		$query = "select flags from users where id=$id and flags='0'";
		$conn = self::dbConnection();
		$stm = $conn->query($query);

		if($stm->num_rows>=1)
		{
			$query = "update users set flags='1' where id=$id";
			$conn = self::dbConnection();
			$stm = $conn->query($query);
			if($stm) {
				header('Location: http://192.168.56.101/final_project/admin-user-list.php');
				exit(0);
			}
		} else {
			$query = "update users set flags='0' where id=$id";
			$conn = self::dbConnection();
			$stm = $conn->query($query);
			if($stm) {
				header('Location: http://192.168.56.101/final_project/admin-user-list.php');
				exit(0);
			}
		}
	}


	public static function save($user)
	{
		$query = "update users set (name='?',email='?',alt_email='?',password='?',institution_id='?',position='?',photo_url='?',profile_url='?',flags='?',role='?') where id=$user->id";
		$conn = self::dbConnection();
		$stm = $conn->prepare($query);
		if($stm) {
			$stm->bind_param("ssssisssii",$user->name,$user->email,$user->alt_email,$user->password,$user->institution_id,$user->position,
				$user->photo_url,$user->profile_url,$user->flags,$user->role);
			if($stm->execute()) {
				header('Location: http://192.168.56.101/final_project/admin-user-list.php');
				exit(0);
			} else {

			}
		}

		//var_dump($user);
		//die("UPDATE STATEMENT HERE");
	}

	public static function delete($id)
	{
		$query = "delete from users where id=$id";
		$conn = self::dbConnection();
		$stm = $conn->query($query);
		if($stm) {
			header('Location: http://192.168.56.101/final_project/admin-user-list.php');
			exit(0);
		} else {

		  }
	}


}

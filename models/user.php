<?php

class UserModel extends Model
{
  public function register()
  {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  //crypter le code
    $password= md5($post['password']);

		if($post['submit'])
		{
      if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''   )
      {
          Messages::setMsg('Please Fill In All Fields','error');
          return;
      }



			//inserer en MySQL
			$this->query('INSERT INTO eleves (CNE,name,password,email) VALUES (:CNE,:name,:password,:email)');
			$this->bind(":CNE",$post['CNE']);
			$this->bind(":name",$post['name']);
			$this->bind(":password",$post['password']);
      $this->bind(":email",$post['email']);
			$this->execute();
			//Verification
			if($this->lastInsertId())
			{
				//Redirection
				header('Location: '.ROOT_URL.'users/login');
			}
		}
		return;
  }

  public function login()
  {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //crypter le code
    $password= md5($post['password']);
		if($post['submit'])
		{
			//Compare Login student
			$this->query('SELECT * FROM eleves WHERE email = :email AND password = :password');
			$this->bind(":password",$post['password']);
      $this->bind(":email",$post['email']);

      $row1 = $this->single();

      //admins
      $this->query('SELECT * FROM admins WHERE email = :email AND password = :password');
			$this->bind(":password",$post['password']);
      $this->bind(":email",$post['email']);

      $row2 = $this->single();


      if($row1)
      {
       $_SESSION['is_logged_in']= true;
       $_SESSION['user_data'] = array(
         "name"=> $row1['name'],
         "email" => $row1['email'],
         "club" => $row1['club'],
         "CNE" => $row1['CNE']
       );
      header('Location: '.ROOT_URL);
    }elseif($row2){
      $_SESSION['is_logged_in']= true;
      $_SESSION['user_data'] = array(
        "CNE" => $row2['CNE'],
        "name"=> $row2['name'],
        "email" => $row2['email']
      );
     header('Location: '.ROOT_URL);

    }else{
        Messages::setMsg('Incorrect Login','error');
      }
		}
		return;
  }
}

 ?>

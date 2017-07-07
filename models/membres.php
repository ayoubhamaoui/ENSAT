<?php

class MembresModel extends Model{

  public function Index()
  {
    return;
  }
  public function addpro(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit'])
		{
			//inserer en MySQL
			$this->query('INSERT INTO clubs (title,email,numero,club,name,body) VALUES (:title,:email,:numero,:club,:name,:body)');
			$this->bind(":title",$post['title']);
			$this->bind(":email",$post['email']);
			$this->bind(":numero",$post['numero']);
      $this->bind(":club",$post['club']);
      $this->bind(":name",$post['name']);
      $this->bind(":body",$post['body']);
			$this->execute();
			//Verification
			if($this->lastInsertId())
			{
				//Redirection
				header('Location: '.ROOT_URL.'membres');
			}
		}
		return;
  }

  public function projet(){
		$this->query('SELECT * FROM clubs order by club');
		$rows = $this->resultSet();
		return $rows;
	}

  public function membre(){
    $this->query('SELECT distinct name,email,numero,club FROM clubs order by club');
    $rows = $this->resultSet();
    return $rows;
  }

}
 ?>

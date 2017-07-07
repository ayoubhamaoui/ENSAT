<?php

class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM shares ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

  public function add(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit'])
		{
			//inserer en MySQL
			$this->query('INSERT INTO shares (title,body,link,user_id) VALUES (:title,:body,:link,:user_id)');
			$this->bind(":title",$post['title']);
			$this->bind(":body",$post['body']);
			$this->bind(":link",$post['link']);
			$this->bind(":user_id",2);
			$this->execute();
			//Verification
			if($this->lastInsertId())
			{
				//Redirection
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
  }

}
 ?>

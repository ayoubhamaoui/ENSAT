<?php
class AboutModel extends Model
{

  public function Index()
  {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit'])
		{
			//Compare Login student
			$this->query("UPDATE eleves SET club = :club WHERE CNE = :id_cne");
			$this->bind(":club",$post['club']);
      $this->bind(":id_cne",$post['id_cne']);

      $row = $this->execute();

      if($row)
      {
      header('Location: '.ROOT_URL);
    }
		return;
   }
  }
}


 ?>

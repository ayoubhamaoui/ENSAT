<?php
class Users extends Controller{
  protected function register()
  {
    $viewmodel = new UserModel();
    $this->returnView($viewmodel->register(),true);

  }

  protected function Login()
  {
    $viewmodel = new UserModel();
    $this->returnView($viewmodel->login(),true);

  }

  protected function logout()
  {
    unset($_SESSION['is_logged_in']);
    unset($_SESSION['user_data']);
    session_destroy();
    //Redirection
    header("Location: ".ROOT_URL);
  }
}
?>

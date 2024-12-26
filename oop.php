<?php
  class User {
    public $name;
    public $email;
    private $status = 'active';

    public function __construct($name, $email) {
      $this->name = $name;
      $this->email = $email;
    }

    public function login() {
      echo 'The user logged in';
    }

    // Getter
    public function getStatus() {
      echo $this->status;
    }

    // Setter
    public function setStatus($status) {
      $this->status = $status;
    }
  }

  $user1 = new User('Alejandro', 'ale@mail.com');

  $user1->login();

  $user->setStatus('inactive');

  $user->getStatus();
  
  var_dump($user1);
?>
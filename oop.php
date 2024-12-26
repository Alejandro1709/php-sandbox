<?php
  class User {
    public $name;
    public $email;
    protected $status = 'active';

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

  class Admin extends User {
    public $level;

    public function __construct($name, $email, $level) {
      parent::__construct($name, $email);

      $this->level = $level;
    }

    public function login() {
      echo 'Admin ' . $this->name . ' logged in';
    }

    public function getStatus() {
      echo $this->status;
    }
  }

  $user1 = new User('Alejandro', 'ale@mail.com');

  $user1->login();

  $user->setStatus('inactive');

  $user->getStatus();

  var_dump($user1);

  $admin = new Admin('Tom Smith', 'tom@mail.com', 5);

  var_dump($admin);
?>
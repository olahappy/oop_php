<?php
// classes can hold properties and mehods

class user {
    // properties  are attributes that belong to a class
    // access modifiers ..... public, private and protected
    // public can be accessed anywhere
    // private can be accessed only  inside the class....same as protected
    public $name;
    public $email;
    public $password;
    // constructors
    // functions that run when an object is created
    public function __construct($name , $email, $password){
        $this->name = $name; 
        $this->email = $email;
        $this->password = $password;
    }

    // methods are funtions belonging to a class
    function set_name ($name){
       $this->name = $name;
    }
    function get_name (){
        return $this->name;
    }
}
// instances
// instantiate a new object
$user1 = new user("Happiness", "ola@gmail.com", "66666") ;

// $user1->set_name("Happiness");
// echo $user1->get_name();

var_dump($user1);

// Inheritance
// use of extends
class employee extends user {
    public function __construct($name , $email, $password, $title){
        parent::__construct($name , $email, $password);

        $this->title = $title;
    }
    
    public function get_title (){
        return $this->title;
    }
}
$employee1 = new employee("Happiness", "ola@gmail.com", "66666", "Accountant");

echo $employee1->get_title();
?>
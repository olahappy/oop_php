<?php
//Inheritance using the extends function
class Customer {
   private $id;
   private $name;
   protected $email;
   private $balance;

public function __construct ($id, $name, $email, $balance){
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->balance = $balance;
}

public function get_Email () {
   return $this->email ;
}

}
 class Subscriber extends Customer{
    public $plan;

    public function __construct ($id, $name, $email, $balance, $plan){
       parent::__construct($id, $name, $email, $balance);
       $this->plan = $plan;
    }

 }


$customer = new Subscriber(1, 'Ola Jones' , 'ola@gmail.com', 500.00, 'daily');
echo $customer->get_Email();
?>
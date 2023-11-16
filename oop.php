<?php 

/*
polymorphism
different classes with same methods are highlighted as overriding
*/
class name{
    private $a, $b, $c; 
    public function __construct($a, $b){
    $this->a = $a;
    $this->b = $b;
    }
    public function getname(){
        echo $this->a;
    }
    public function setname(){
        $this->a = "ashar";
    }
    
}
// class newclass extends name{
//     public function owais(){
//         echo "owais in newclass";
//     }
// }


// getter and setter are used in private classes and this highlights the concept of abstratction and encapsulation

$obj1 = new name("aiyer", "owais");
$obj1->getname();
$obj1->setname();
$obj1->getname();

// print_r($obj1);

// $obj2 = new newclass();
// $obj1->owais();
// $obj2->owais();


?>
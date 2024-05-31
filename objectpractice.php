<?php


ini_set('display_errors',1);


class Greeting
{
    public $Greetingname;

    function set_greet($Greetingname)
    {
        $this->Greetingname = $Greetingname;
    }

    function get_greet()
    {
        return $this->Greetingname;
    }
}

$Greet = new Greeting();
$next = new Greeting();

$Greet->set_greet("Good Morning");
echo $Greet->get_greet();
echo "<br><br>";

$next->set_greet("Good Afternoon");
echo $next->get_greet();



echo "<br><br>";


class Food 
{
    public $foodname;
    public $fooddetail;

    function __construct($foodname,$fooddetail)
    {
        $this->foodname = $foodname;
        $this->fooddetail = $fooddetail;
    }

    function get_fooddata()
    {
        return $this->foodname;
    }
    function get_fooddet()
    {
        return $this->fooddetail;
    }

    function Alldetils()
    {
        echo "The food is :".$this->foodname."And  The side dishes for meals are :".$this->fooddetail;
    }

}

$detail = new Food("MEALS","with rice and currys");
echo $detail->get_fooddata();
echo "<br>";
echo $detail->get_fooddet();
echo "<br>";
echo $detail->Alldetils();
echo "<br><br>";

class Student
{
    public $name;
    public $email;
    public $age;


    function __construct()
    {
        $this->name = "Gnaneswar";
        $this->email = "Gnaneswar@gmail.com";
        $this->age = "22";
    }

    function display()
    {
        echo $this->name."<br>";
        echo $this->email."<br>";
        echo $this->age;
        
    }
}

$stdet = new Student();
$stdet->display();


echo "<br><br>";

class Homework
{
    public $workname;
    
    function __construct($workname)
    {
        $this->workname = $workname;
    }

    function get_work()
    {
        return $this->workname;
    }

    function __destruct()
    {
        echo "<br>The homework {$this->workname} is completed ";
    }

}

$work = new Homework("Coding");

echo $work->get_work();


// public - it can accessed any where for the class
// protected - it can be accssed within the class and class derived from it.
// private - it is accessed within the class only.

echo "<br><br>";

class Prove
{
    public $provision;

    function __construct($provision)
    {
        $this->provision = $provision;
    }

    function get_pro()
    {
        echo "THE PROVISION NAME :".$this->provision;

    }
}

class Item extends Prove
{
    public function message()
    {
        echo "Provision name is set <br>";
    }
}

// $pro = new Prove("Golkonda");
// echo $pro->get_pro();
// echo "<br>";
$res = new Item("Hyderabad");
$res->message();
echo "<br>";
$res->get_pro();
echo "<br><br>";




// class - it is a template which describes the object and behaviour of objects.

// object - It's a compound data type that can store values of more than one type in a single variable.

/* you use the 'new' keyword followed by the class name. This will create an instance of the class which 
can then be used to call any public methods or access any public properties defined within the class.
*/

// constructor - it is used to initalize the object values.
//Constructors help organize and centralize the initialization logic of an object in one place.

// destructor -- it will delete the object values in the constructor and ends the class.
//This method is also used for cleaning up resources and to free the memory for accommodating more.

// inheritance -  it derives of one class and another class. by using extends keyword.
//inheritance is used to reduce code duplication by using code from the parent class in the child classes. 



// $arr = array("good","bad");
// array_push($arr,"Naveen");
// print_r($arr);
// echo "<br><br>";
// $a = array_fill_keys($arr,"a");
// print_r($a)


// fill the keys as a,b,c 


$arr = array("good","bad","Naveen");
$keys = array("a", "b", "c");
$combinedArray = array_combine($keys, $arr);

print_r($combinedArray);
echo "<br><br>";


abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! Meow!";
    }
}

$dog = new Dog("Buddy");
echo $dog->makeSound(); // Output: Woof! Woof!

$cat = new Cat("Whiskers");
echo $cat->makeSound(); // Output: Meow! Meow!




































?>















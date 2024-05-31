<?php

ini_set('display_errors',1);




// $name = "Gnaneswar";
// $age = "25";
// $email = "Gnaneswar@2002";

// $post = compact("name","age","email");

// print_r($post);


echo "<br><br>";

$arr = array("meat","masala","rice");
class Dish
{
    public $dishname;
    public $ingrediants;

    function set_dish($dishname)
    {
        $this->dishname = $dishname;
    }

    function display()
    {
        return $this->dishname;
    }

    function set_item($ingrediants)
    {
        $this->ingrediants = $ingrediants;
    }

    function display_item()
    {
        return $this->ingrediants;
    }
    
}

$newdish = new Dish();
$newdish->set_dish('Biryani');
echo "Dish name: ".$newdish->display();
$newdish->set_item(json_encode($arr));
echo "<br>";
echo "Ingrediants: ".$newdish->display_item();


echo "<br><br>";

class Tech
{
    public $techname;
    public $techdetail;

    function __construct($techname, $techdetail)
    {
        $this->techname = $techname;
        $this->techdetail = $techdetail;
    }

    function get_name()
    {
        return $this->techname;
    }

    function get_detail()
    {
        return $this->techdetail;
    }

}

$res = new Tech("Python","PYTHON DEVELOPER");
echo $res->get_name();
echo"<br>";
echo $res->get_detail();


echo "<br><br>";

class Food
{
    public $foodname;
    public $fooddetail;

    function __construct($foodname, $fooddetail)
    {
        $this->foodname = $foodname;
        $this->fooddetail = $fooddetail;
    }

    function __destruct()
    {
        echo "The food name: $this->foodname and the detail of food is: $this->fooddetail";
    }

    function theory()
    {
        return $this->foodname;
    }
}

$data = new Food("DOSA", "IT IS A MORNING BREAKFAST FOOD");

echo $data->theory()."<br>";

echo "<br><br>";


class Phone {
  public $name;
  public $model;

  function __construct($name, $model) {
    $this->name = $name;
    $this->model = $model;
  }

  function intro() {
    echo "The phone is {$this->name} and, the model is {$this->model}.";
  }
}
class Mobile extends Phone {
  function message() {
    echo "THE MOBILE NAME AND MODEL DETAILS.<br>";
  }
}

$Obj = new Mobile("motorola", "2023 model");
$Obj->message();
$Obj->intro();


echo "<br><br>";

class Greeting
{
    const Message = "Good Evening Everyone";
}
echo Greeting::Message;

echo "<br><br>";

























?>
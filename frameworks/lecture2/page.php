<?php
    class fruit{
        public $name = "luka";
        public $color;

        function __construct($name){
            $this->name = $name;
            echo "<h1>hello i am fruit!!!</h1>";
        }

        function print_color(){
            echo "<h1>this is my color</h1>";
        }

        function print_name(){
            echo "<h1>my name is {$this->name}!!!</h1>";
        }
    }


    $fruit1 = new fruit("apple");
    $fruit1->print_color();
    $fruit1->print_name();
    echo "<hr>";

    $fruit2 = new fruit("banana");
    $fruit2->print_color();
    $fruit2->print_name();

?>
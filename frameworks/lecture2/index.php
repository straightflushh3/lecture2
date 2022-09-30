<?php
// $NAME = "BACHO";
// echo $NAME;
// echo "<hr>";
// var_dump($NAME);
// echo "<hr>";


    class person{
        public $NAME = "LUKA";
        public $LAST_NAME;
        private $ID;
        protected $AGE;

        function set_name($NAME){
            $this->name = $NAME;
        }

        function print_name(){
            echo "NAME =" .$this->NAME;
        }

        function test(){
            echo "TEST!!!";
        }
    }

    $PERSON1 = new person();
    $PERSON2 = new person();

    $PERSON2->NAME=" ANNA";
    // $PERSON2->ID="5001005001";
    // $PERSON2->$AGE= 23;

    $PERSON1->test();
    $PERSON1->NAME = " LUKA";
    echo "<hr>";
    echo $PERSON1->NAME;
    echo "<hr>";
    $PERSON1->print_name();
    echo "<hr>";
    $PERSON2->print_name();
?>
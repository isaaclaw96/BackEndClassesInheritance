<?php

    class Person extends Shop{
        //Properties
        protected $name;

        //Method
        public function __construct($name){
            $this->name = $name;      
        }
    }

    class Shop {
        //Properties
        public $shopName;
        public $item;

        //Method
        public function setShopName($shop,$buy){
            $this->shopName = $shop;
            $this->item = $buy;
            echo $this->name." goes to ".$this->shopName." to buy ".$this->item[0].", ".$this->item[1].", ".$this->item[2]; 
        }
        public function setHQ($shop,$fewitems){
            $this->item =$fewitems;
            echo $this->name." also goes to ".$this->shopName." to buy ".$this->item[0].", ".$this->item[1].", ".$this->item[2].", the shop owner sent the errand boy to HQ to get the items.";
        }

    }



$person1 = new Person("Kevin");
$person2 = new Person("Fikri");
$person3 = new Person("Arjun");

$person1->setShopName("SpeedMart",["fish","chicken","cheese"]);
echo "<br>";
$person2->setShopName("SpeedMart",["milk","eggs","rice"]);
echo "<br>";
$person3->setHQ("SpeedMart",["milk","eggs","rice"]);

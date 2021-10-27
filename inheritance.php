<?php

    class MyInterface1 {
        public function calcArea();

    }
    
    class MyInterface2 {
        public function calcVol();
    }

    class Child implements MyInterface1, MyInterface2{


    }


    //polymorphphism is a class can be reused in other classes
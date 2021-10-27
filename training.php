<!-- Invoke has 5 students //class Invoke (public function)

Each students has 1 bag //child of class Invoke which has 3 variables which are the colours (protected function)

Each bag has 3 colours = Green, Blue, Black (public)

echo name of the students who have Black bags (assume Hafiy,Amir,Fikri) -->

<?php 

    class Invoke{
        //Properties
        public $student;

        //Methods

        public function set_Name($Name){
            return $this->student = $Name;

        }

        // public function get_Name(){
        //     return $this->student;
        // }
        
    }
    class Bag extends Invoke{
            public $bag;

            public function set_Bag($Color){
               return $this->bag = $Color;
            }

    }
    $student1 = new Invoke();
    $student1->set_Name("Hafiy");
    // echo $student1->get_Name();

    echo "<br>";
    $student2 = new Bag();
    $student2->set_Name("Amir");
    $student2->set_Bag("Black");

    echo $student2->student;
    echo "<br>";
    echo $student2->bag;
    
    // class Bag extends Invoke{
    //     //Properties
    //     protected $Color =["Blue","Green","Black"];

    //     //Methods
    //     protected set_Color($Color[0]){
    //         $this->student = $student2;
    //     }

    //     protected get_Color(){
    //         return $this->student;
    //     }

    // }

    // echo $student2->get_Color();


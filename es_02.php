<?php
class Vertebrates{
    public function __construct(){
        $this->printVertebrates();
    }

    protected function printVertebrates(){
        echo "Sono un animale Vertebrato"."\n";

    }
}
class WarmBlooded extends Vertebrates{
    public function __construct(){

        $this->printWarm();

    }

    protected function printWarm(){
        parent::printVertebrates();
        echo "Sono un animale a sangue caldo"."\n";

    }
}
class Mammals extends WarmBlooded{
    public function __construct(){

        $this->printMam();

    }

    protected function printMam(){
        parent::printWarm();
        echo "Sono un Mammifero"."\n";

    }
}
class Birds extends WarmBlooded{
    public function __construct(){

        $this->printBird();

    }

    protected function printBird(){
        parent::printWarm();
        echo "Sono un Uccello"."\n";

    }
}
class ColdBlooded extends Vertebrates{
    public function __construct(){

        $this->printCold();

    }

    protected function printCold(){
        parent::printVertebrates();
        echo "Sono un animale a sangue Freddo"."\n";

    }
}
class Fish extends ColdBlooded{
    public function __construct(){

        $this->printFish();

    }

    protected function printFish(){
        parent::printCold();
        echo "Splash!"."\n";

    }
}
class Reptiles extends ColdBlooded{
    public function __construct(){

        $this->printRep();

    }

    protected function printRep(){
        parent::printCold();
        echo "Fss!"."\n";

    }
}
class Amphibians extends ColdBlooded{
    public function __construct(){

        $this->printAmph();

    }

    protected function printAmph(){
        parent::printCold();
        echo "Hop!"."\n";

    }
}
$magikarp= new Fish();
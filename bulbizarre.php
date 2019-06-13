<?php
    include_once './pokemon.php';
    
    class Bulbizarre extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Bulbizarre';
            $max_life = 100 + 5 * $level;
            $life = $life ?? $max_life;
            $type = 'eau';
            $strength = 10 + 2 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }

        public static function say_hi ()
        {
            echo "Bulbii !\n";
        }

        public function level_up ()
        {
            $this->level += 1;
            $this->life += 7;
            $this->strength += 3;

            $level_up_text = $this->name . ' passe au niveau ' . $this->level . "\nIl gagne 7 pts de vie et 3 pts de force.\n";

            echo $level_up_text;
            return true;
        }



    }

?>
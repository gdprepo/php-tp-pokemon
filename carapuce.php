<?php
    include_once './pokemon.php';
    
    class Carapuce extends Pokemon
    {
        
        public function __construct ($level, $life = null)
        {
            $name = 'Carapuce';
            $max_life = 100 +  9 * $level;
            $life = $life ?? $max_life;
            $type = 'eau';
            $strength = 10 + 2 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }

        public static function say_hi ()
        {
            echo "Cara !\n";
        }

        public function level_up ()
        {
            $this->level += 1;
            $this->life += 9;
            $this->strength += 2;

            $level_up_text = $this->name . ' passe au niveau ' . $this->level . "\nIl gagne 9 pts de vie et 2 pts de force.\n";

            echo $level_up_text;
            return true;
        }

    }


?>
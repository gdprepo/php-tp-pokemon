<?php

        include_once './pokemon.php';


        abstract class Pokemon
        {
                public $name;
                public $life;
                public $level;
                public $type;
                public $strength;
    
                public function __construct ($name, $max_life, $life, $level, $type, $strength)
                {
                        $this->name = $name;
                        $this->max_life = $max_life;
                        $this->life = $life;
                        $this->level = $level;
                        $this->type = $type;
                        $this->strength = $strength;

                }

                abstract public function level_up ();
                
                public function attaque ($enemie)
                {
                    $dega = ceil($enemie->strength * (rand(900, 1100) / 1000));

                    $this->life = $this->life - $dega;

                    return true;
                }

                public static function say_hi()
                {
                        echo 'Hi !' . "\n";
                }


        }


?>

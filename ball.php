<?php

        include_once './pokemon.php';
        include_once './index.php';
        include_once './usable.php';


        abstract class Ball
        {
                public $name;
                public $level;
    
                public function __construct ($name, $level)
                {
                        $this->name = $name;
                        $this->level = $level;
                }



                public function capture ($pokemon)
                {
                        $capture = (($pokemon->max_life - $pokemon->life) / $pokemon->max_life) * (1 + ($this->level - $pokemon->lvl_pokemon) / 25);
                        return ($capture);
                }

                public function use ($pokemon)
                {
                    echo $this->name . ' lancée sur ' . $pokemon->name . '...';
                    
                    $catch = $this->capture($pokemon);
                    
                    if (!$catch)
                    {
                        echo "ko.\n";
                        return false;
                    }
        
                    echo ' ' . $pokemon->name . ' a été capturé !';
                    return true;
                }
        }
?>
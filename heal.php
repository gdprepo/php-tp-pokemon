<?php

        include_once './pokemon.php';
        include_once './index.php';
        include_once './usable.php';
        include_once './potion.php';
        include_once './hyperpotion.php';
        include_once './superpotion.php';
        include_once './potionmax.php';


        abstract class Heal
        {
                public $name;
                public $heal;
    
                abstract public function __construct ();

                public function heal ($pokemon, $heal)
                {
                        $pokemon->life = $pokemon->life + $heal;
                        return ($capture);
                }

                public function use ($pokemon)
                {
                    echo $this->name . ' utilisé sur ' . $pokemon->name . '...';
                    
                    $catch = $this->heal($pokemon, $this->heal);
                    

                    echo ' ' . $pokemon->name . ' a été soigné +50xp !';
                    return true;
                }
        }






?>
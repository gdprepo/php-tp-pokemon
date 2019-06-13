<?php
        include_once('./index.php');
        include_once('./heal.php');

        class Bot
        {
                public $bag;

                public function __construct($pokemon, $enemie, $bag) {
                        $this->pokemon = $pokemon;
                        $this->enemie = $enemie;
                        $this->bag = $bag;
                }

                public function remove_in_bag($item) {
                        unset($this->bag[$item]);
                }

                public function search_in_bag($bag, $class) {
                        foreach($this->bag as $key => $item) {

                                if (is_a($item, $class)){
                                        $this->remove_in_bag($item);
                                        return $item;
                                }
                        }
                        return false;

                }


                public function check_heal($enemie, $pokemon) {
                        if ($this->dega_max($enemie) * 2 >= $pokemon->life) {
                                $this->Superpotion->use($pokemon);
                        }
                        
                        return false;


                }

                public function check_capture($pokemon, $pokeball) {
                        if ($pokeball->capture($pokemon) > 1) {
                                $pokeball = $this->search_in_bag($this->bag, Pokeball);
                                $pokeball->use($pokemon);
                        }

                        return false;
                }

                public function dega_max($pokemon)
                {
                        $dega_max = ceil($pokemon->strength * (1100 / 1000));

                        return $dega_max;

                }


        }
?>
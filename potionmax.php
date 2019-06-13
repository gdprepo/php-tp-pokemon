<?php
        class Potionmax extends Heal
        {
                public function __construct ()
                {
                        $this->name = 'Potionmax';
                        $this->heal = $pokemon->max_life;
                }
        }

?>
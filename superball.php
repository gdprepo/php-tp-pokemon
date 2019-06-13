<?php

        class Superball extends Ball
        {
                public function __construct ()
                {
                        $this->name = "Superball";
                        $this->level = 20;
                        parent::__construct($name, $level);
                }

        } 



?>
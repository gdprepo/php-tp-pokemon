<?php
        class Masterball extends Ball
        {
                public function __construct ($name, $level)
                {
                        $this->name = "Masterball";
                        $this->level = 100;
                        parent::__construct($name, $level);
                }

        }

?>
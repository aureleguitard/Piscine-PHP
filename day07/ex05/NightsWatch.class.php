<?php

Class Nightswatch implements IFighter{
    public $members = array();
    public function recruit($person) {
           if($person instanceof IFighter){
                $this->members[] = $person;
            }        
        }
        public function fight() {
            foreach ($this->members as $fighter){
                if ($fighter){
                    $fighter->fight();
                }
            }
        }
    }
?>
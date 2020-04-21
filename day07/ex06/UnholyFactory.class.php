<?php

    Class UnholyFactory {
        public $absorb = array ();
        public function absorb($soldier){
        if (get_parent_class($soldier)) {       
            if(in_array($soldier, $this->absorb)) {
                print("(Factory already absorbed a fighter of type " . $soldier->nameOfChar . ")" . PHP_EOL);
            }
            else {
                print("(Factory absorbed a fighter of type " . $soldier->nameOfChar. ")" . PHP_EOL);
                $this->absorb[$soldier->nameOfChar] = $soldier;
            }
        }
        else
            print("(Factory can't absorb this, it's not a fighter)". PHP_EOL);
    }
    public function fabricate($typeOfSoldier) {
        if (array_key_exists($typeOfSoldier , $this->absorb)){
            print("(Factory fabricates a fighter of type " . $typeOfSoldier . ")" . PHP_EOL);
            return($this->absorb[$typeOfSoldier]);
        }
        else
            print("(Factory hasn't absorbed any fighter of type " . $typeOfSoldier . ")" . PHP_EOL);
    }
}
?>

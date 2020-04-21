<?php
    
    Class Tyrion extends Lannister {
        public function sleepWith($personSleepWith){
            if (get_class($personSleepWith) == 'Jaime' || get_class($personSleepWith) == 'Cersei') {
                print("Not even if I'm drunk !" . PHP_EOL);
            }
            elseif (get_class($personSleepWith) == 'Sansa') {
                print("Let's do this." . PHP_EOL);
            }
            else {
                print("Not even if I'm drunk !" . PHP_EOL);
            }
        }
    }
?>
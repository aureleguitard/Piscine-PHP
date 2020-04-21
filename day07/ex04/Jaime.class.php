<?php
    Class Jaime extends Lannister {
        public function sleepWith($personSleepWith){
            if (get_class($personSleepWith) == 'Tyrion') {
                print("Not even if I'm drunk !" . PHP_EOL);
            }
            elseif (get_class($personSleepWith) == 'Sansa') {
                print("Let's do this." . PHP_EOL);
            }
            else
                print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
        }
    }

?>
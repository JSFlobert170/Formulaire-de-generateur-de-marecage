//Flobert JOHNSON 1BTS SNIR
<?php

class Swamp
{
    public $xxx;
    public $yyy;
    public $swamp = array();


    public function __construct()
    {
        $cpt = func_num_args();
        $args = func_get_args();

        srand($this->make_seed());

        if ($cpt == 0) {
            $this->xxx = 10;
            $this->yyy = 15;
        } else {
            if ($cpt == 2) {
                $this->xxx = $args[0];
                $this->yyy = $args[1];
            }
        }
    }

    private function make_seed()
    {
        list($usec, $sec) = explode(' ', microtime());
        return $sec + $usec * 1000000;
    }

    /* private function toutAun()
     {
         for ($iii = 0; $iii < $this->xxx; $iii++) {
             for ($jjj = 0; $jjj < $this->yyy; $jjj++) {
                 $this->swamp[$iii][$jjj] = '1';
             }
         }
     }*/
    private function toutAZero()
    {
        for ($iii = 0; $iii < $this->xxx; $iii++) {
            for ($jjj = 0; $jjj < $this->yyy; $jjj++) {
                $this->swamp[$iii][$jjj] = '0';
            }
        }
    }

    private function randomFill()
    {
        for ($iii = 1; $iii < $this->xxx - 1; $iii++) {
            for ($jjj = 1; $jjj < $this->yyy - 1; $jjj++) {
                $randval = ((rand() % 8));
                $this->swamp[$iii][$jjj] = $randval;

                if ($randval < 4) {
                    $this->swamp[$iii][$jjj] += $this->swamp[$iii][$jjj - 1];
                }
            }
        }
    }

    public function swampReduction()
    {
        for ($iii = 0; $iii < $this->xxx; $iii++) {
            for ($jjj = 0; $jjj < $this->yyy; $jjj++) {
                if ($this->swamp[$iii][$jjj] <= 5) {
                    //echo '<td class="table-two" style="border: 1px solid black; background-color:#4bc944;"></td>';
                    $this->swamp[$iii][$jjj] = '-';
                }
                if ($this->swamp[$iii][$jjj] > 5) {
                    //echo '<td class="table-three" style="border: 1px solid black; background-color:#22b11a;"></td>';
                    $this->swamp[$iii][$jjj] = '+';
                }
            }
        }
    }

    public function tab()
    {
        echo '<table class="table table-hover">';
        for ($j = 0; $j < $this->xxx; $j++) {
            echo '<tr>';
            for ($i = 0; $i < $this->yyy; $i++) {

                if($this->swamp[$j][$i]==0) {
                    echo '<td class="table-primary">';
                    //print_r($this->swamp[$j][$i]);
                    echo '</td>';
                }
                else if($this->swamp[$j][$i]<=8) {
                    echo '<td class="table-one" style=" background-color:#4bc944;">';
                    //print_r($this->swamp[$j][$i]);
                    echo '</td>';
                }
                if($this->swamp[$j][$i]>8) {
                    echo '<td class="table-two" style=" background-color:#c4373e;">';
                    //print_r($this->swamp[$j][$i]);

                    echo '</td>';
                }

            }
            echo '</tr>';
        }
        echo '</table>';
    }

    public function swampGenerator()
    {
        //$this->toutAun();
        $this->toutAZero();
        $this->randomFill();
        $this->tab();
        $this->swampReduction();
    }
}

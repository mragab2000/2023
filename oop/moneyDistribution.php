<?php

class Distribution
{
    public $names;
    public function sumOfExpenses($names)
    {

        return array_sum($names);
    }
    public function fairDistribution($names)
    {
       
       return array_sum($names)/6;
    
    }
}
$distribution = new Distribution();
echo $distribution->sumOfExpenses(["ahmed" => 50, "mahmoud" => 33.5, "mohamed" => 12.6, "alaa" => 8.4, "reda" => 66, "ragab" => 65.9]);
echo "------";
echo "so that means everyone have to pay ". $distribution->fairDistribution(["ahmed" => 50, "mahmoud" => 33.5, "mohamed" => 12.6, "alaa" => 8.4, "reda" => 66, "ragab" => 65.9])

?>
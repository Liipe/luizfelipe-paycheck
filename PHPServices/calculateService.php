<?php
class calculateService{
    public static function calculateINSS($salary){
        if($salary >=1 && $salary<=1399.12){
            return (($salary * 8)/100 );
        }
        elseif($salary >=1399.13 && $salary<=2331.88){
            return (($salary * 9)/100 );
        }
        elseif($salary >=2331.89 && $salary<=4663.75){
            return (($salary * 11)/100 );
        }
        elseif($salary > 4663.75){
            return($salary - 513.02);
        }
    }
    
    public static function calculateIRPF($salary){
        
            if($salary >= 1903.99 && $salary <= 2826.65){
                return ($salary * 0.75) - 142.80;
            } 
             elseif($salary >= 2826.66 && $salary <= 3751.05){
                return($salary * 0.15) - 354.80;
            }
             elseif($salary >= 3751.06 && $salary <= 4664.68){
                return($salary * 0.225) - 636.13;
            }
             elseif($salary > 4664.68){
                return ($salary * 0.275) - 869.38;
        }    
    }
    
    public static function calculateSalary($salary){
        //...
    }
}

?>
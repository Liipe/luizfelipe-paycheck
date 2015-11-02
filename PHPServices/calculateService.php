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
    
    public static function calculateBaseSalary($salary){
        $inss = self::calculateINSS($salary);
        return $salary - $inss;
    }
    
    public static function calculateIRPF($baseSalary){
    
        $irpf = 0.00;    
    
        if($baseSalary >= 1903.99 && $baseSalary <= 2826.65){
             $irpf = ($baseSalary * 0.075) - 142.80;
        } 
         elseif($baseSalary >= 2826.66 && $baseSalary <= 3751.05){
             $irpf = ($baseSalary * 0.15) - 354.80;
        }
         elseif($baseSalary >= 3751.06 && $baseSalary <= 4664.68){
             $irpf = ($baseSalary * 0.225) - 636.13;
        }
         elseif($baseSalary > 4664.68){
             $irpf = ($baseSalary * 0.275) - 869.36;
        }
        
        return  $irpf;
    }
    
    public static function calculateLiquidSalary($salary){
        $liquidSalary = 0.0;
        
        $inss = self::calculateINSS($salary);
        $baseSalary = self::calculateBaseSalary($salary);
        $irpf = self::calculateIRPF($salary - $inss);
        $liquidSalary = $salary - $inss - $irpf;
        
        return $liquidSalary;
    }
}

?>

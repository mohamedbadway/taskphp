<?php
// task1
// $name = "programmer";

// echo "Hello," . $name;

// task2
//  $num1 =5;
//  $num2 =10;
//  echo $num1 + $num2;
//  echo "<br/>";
//  echo $num1 * $num2;
//  echo "<br/>";
//  echo $num1 - $num2;
// function number($num1,$num2){
//      echo $num1 + $num2;
//  echo "<br/>";
//  echo $num1 * $num2;
//  echo "<br/>";
//  echo $num1 - $num2;
// }
// number(5,10);

// task3

//  $x= (1 * 2) - (3 * 4);
//  echo "Difference=".$x;
// function num($A,$B,$C,$D){
//    echo ($A * $B ) - ($C * $D);
// }
// echo  num(1,2,3,4)  ; 


// task4

// $num1 = 12 % 10;
// $num2 = 13 % 10;
// echo $num1 + $num2; 
// function digit($num1,$num2){
//   $num1 =  $num1 % 10;
//  $num2 =  $num2 % 10; 
//  echo $num1 + $num2;
// }
// echo digit(12,13);

// task5
// $n = 4569 / 1000;
// if($n % 2 == 0){
//     echo "the number of even";
// }
// else{
//     echo "the number of odd";
// } 
// function num($n){
//     $n = $n / 1000;
//     if($n % 2 == 0){
//         echo "the number of even";
//     }
//     else{
//         echo "the number of odd";
//     } 

// }
// echo num(4569);
// echo "<br/>";
// echo num(3569);

// task6
//  function num($a,$b,$k){
//     $num1 = ($a % $k ==0);
//     $num2 = ($b % $k ==0);
//     if($num1 && $num2){
//         echo "Both";
//     }elseif($num1){
//         echo "memo";

//     }elseif($num2){
//         echo "momo";
//     }else{
//          "no one";
//     }
//  }
//  echo num(15,7,3);15 %3  7 %3 a b k
//  echo "<br/>";
//  echo num(22,10,2);22%2 10 %2 a b k

// task7
// $n = 36;
//  $u = $n / 10;
//  $v =$n %10;
// if($u !=0 && $v != 0 && ($u  % $v == 0 || $v % $u == 0)){
// echo "yes";
// }else{
//     echo "no";
// }

// task8
// $num =5;
// for($i =1;$i <=$num;$i++){
//     echo $i ."<br/>;
// }

// task9
// $num =10;
// for($j =2; $j <= $num; $j +=2){
//     echo $j ."<br/> ;
// } 
// $num =5;
// for($j =2; $j <= $num; $j +=2){
//     echo $j ."<br/>;
// } 
// task10
// $array = [1,8,5,7,5];
  
// $max = $array[0];
// foreach($array as $value){
//     if($max < $value){
//         $max = $value;
//     }
// }
// echo $max;

// task11
// function getprime($number){
//     for($i =2 ; $i < $number; $i++){
// if($number % $i  ==0){
//     return 0;
// }
//     }
//     return 1;
// }
// if(getprime(7)){
//     echo "this number is prime(yes)";
// }else{
//  echo "not a prime number(no)";
// }
// task12//
// $n = 160;
// $rev = strrev($n) ;
// if($n == $rev) {
//     echo "$n  yes";
// }else{
//     echo "$n no";
// }
//   $string ="12121";
// for($i=4;$i >= 0; $i--){
//     echo $string[$i] ;
    
     
// }
// echo "<br/>";
// $string ="160";
// for($i=2;$i >= 0; $i--){
//     echo $string[$i] ;
    
     
// }
//  task13 postive
//  function num($n){
//     for($i=1;$i<=$n;$i++){
//         if($n % $i ==0){
//             echo $i ."<br/>";
//         }
//     }
//  }
//  echo num(6) ."<br/>" ;
//  echo "<br/>";
//  echo "<br/>";
//  echo num(7);
//  echo "<br/>";
//  echo "<br/>";
// echo num(4);
 
// task14 /////
 
//1 ===>  10^5 =100000
// function is_lucky($n) {
//     while ($n > 0) {
//         $digit = $n % 10;
//         if ($digit != 4 && $digit != 7) {
//             return false;
//         }
//         $n = (int)($n / 10);
//     }
//     return true;
// }

// function find_lucky_numbers($a, $b) {
//     $lucky_numbers = array();
//     for ($i = $a; $i <= $b; $i++) {
//         if (is_lucky($i)) {
//             $lucky_numbers[] = $i;
//         }
//     }
//     if (count($lucky_numbers) == 0) {
//         return -1;
//     } else {
//         return implode(" ", $lucky_numbers);
//     }
// }

 
// echo find_lucky_numbers(4, 20); 
// echo "<br/>";
// echo find_lucky_numbers(8, 15);  

//task15
// for($i=1;$i <= 4;$i++){
//  for($j=1;$j <= $i;$j++){
//    echo "* \n";  
//  } 
//  echo "<br/>";
// }

?>
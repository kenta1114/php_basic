<?php

//define("MY_EMAIL","taguchi@dotinstall.com")


//数値型の演算

// + - * / % **

// $x=10%3;  //1
// $y=30.2/4; //7.55
// var_dump($x);
// var_dump($y);


//単項演算子

// $z=5;
// $z++;
// var_dump($z);


//代入を伴う演算子
// $x = 5;
// $x *= 2;

// if 条件分岐
// $score=90;
// if($score>80){
//   echo "great!";
//  }elseif($score>60){
//   echo "good!";
// }else{
//   echo "so so...";
// }

//switch 条件分岐

// $signal="red";
// switch($signal){
//     case "red":
//       echo "stop!";
//       break;
//     case "blue":
//       echo "go!";
//       break;
//     case "yellow":
//       echo "caution!";
//       break;
//     default:
//       echo "wrong signal";
//       break;
// }


// foreach($colors as $value){
//   echo "$value";
// endforeach;
// }

//関数
/*function sayHi($name="Taguchi"){
  echo "hi!".$name;
  return "hi!".$name;
}

/*sayHi("Tom");
sayHi("Bob");
sayHi();

$s=sayHi();
var_dump($s);
*/

//user

// class User{
//
//     public function_construct($name){
//         $this->name=$name;
//     }
//
//     public function sayHi(){
//         echo "hi, i am $this->name!";
//     }
// }
// //
// $tom= new User("Tom");
// $bob=new User("Bob");
//
// echo $tom->name;
// $bob->sayHi();


// function div($a,$b){
//   try{
//     if($b === 0){
//       throw new Exception("Cannot divide by 0!");
//     }
//     echo $a/$b;
//   }catch(Exception $e){
//     echo $e->getMessage();
//   }
// }
//
// div(7,2);
// div(5,0);


// class AdminUser extends User{
//   public function sayHello(){
//     echo "hello from $this->name";
//   }
// }
// $tom = new User("Tom");
// //echo $tom -> $name;
// $steve= new AdminUser("Steve");
// $steve->sayHello();
//echo $steve->name;
//$tom -> sayHi();
//$steve->sayHi();

//$steve = new AdminUser("Steve");
//$steve -> sayHello();

// 抽象クラス
// abstract class BaseUser{
//   public $name;
//   abstract public function sayHi();
// }
//
// class User extends BaseUser{
//   public function sayHi(){
//     echo "hello from User";
//   }
// }




/*override
public function sayHi(){
  echo "[admin] hi,i am $this->name!";
}
*/

?>

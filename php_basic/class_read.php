<?php
//クラス
class User{
  public $name;
  public function __construct($name){
    $this->name=$name;

  }
  //method
public function sayHi(){
  echo "hi,i am $this->name!";
  }
}

// class AdminUser extends User{
//   public function sayHello(){
//     echo "hello from $this->name";
//   }
// }

// $tom = new User("Tom");
// //echo $tom -> $name;
// $steve= new AdminUser("Steve");
// $steve->sayHello();
echo $steve->name;
$tom -> sayHi();
$steve->sayHi();

//$steve = new AdminUser("Steve");
//$steve -> sayHello();

/*抽象クラス
abstract class BaseUser{
  public $name;
  abstract public function sayHi();
}

class User extends BaseUser{
  public function sayHi(){
    echo "hello from User";
  }
}
*/

/*override
public function sayHi(){
  echo "[admin] hi,i am $this->name!";
}
*/

?>

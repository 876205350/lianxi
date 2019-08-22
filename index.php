<?php
class person{
  public static $name;
  public $age;
  private $sex;
  function __construct($name,$age,$sex){
      self::$name = $name;
      $this ->age = $age;
      $this ->sex = $sex;
  }
  private static function setname(){
    self::$name = "刘海洋";
  }
  public function my(){
      $this->setname();
      return self::$name;
  }
}

$person = new person("张三",23,"男");
echo "性别：".$person->my();
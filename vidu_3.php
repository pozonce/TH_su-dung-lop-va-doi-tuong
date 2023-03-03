<?php
class Person {
    private $name;
    private $age;
    private $sex;
    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getsex() {
        return $this->sex;
    }
    public function getInfo() {
        return "{$this->name}, {$this->age} years old, {$this->sex}";
    }
}
$person = new Person("Nguyễn Văn Thành An", 29, "male");
echo $person->getInfo();
?>
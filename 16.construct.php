<?php

// El metodo constructor es una funcion que se ejecuta cada vez que un nuevo objeto es instanciado

class User {
    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$user1 = new User('Martin','27');
echo $user1->name;
echo $user1->age;

// Herencia de clases
// Mediante la herancia una clase hija puede heredar los atributos y metodos de una clase padre o superclase
class Employee extends User {
    public function __construct($name,$age) {

        // Metodo __construct heredado
        parent::__construct($name,$age);
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$employee1 = new Employee('Andrea',30);
echo $employee1->getName();
echo $employee1->getAge();
<?php

// La programacion orientada a objetos es un paradigma de programacion compuesto por clases
// Las clases pueden contener propiedades y metodos
// A partir de una clase es posible generar objetos
 
class User {

    // Las propiedades son atributos que pertenecen a la clase
    // Propiedades publicas de la clase
    public $name;
    public $email;
    public $password;

    // Modificadores de acceso
    /*
        - public :: El acceso es permitido desde cualquier parte del codigo
        - private :: El acceso solo es permitido desde dentro de la clase
        - protected :: El acceso es permitido unicamente desde dentro de clase que contiene el atributo o metodo, o desde las clases hijas
    */

    // Los metodos son funciones que pertenecen a la clase
    function setName($name) {

        // La palabra clave $this hace referencia a una propiedad dentro de la misma clase
        $this->name = $name;
    }
    
    function getName() {
        return $this->name;
    }
    
}

// Instanciacion
$user1 = new User();
$user2 = new User();

$user1->setName('Andrea');
$user2->setName('Martin');

echo $user1->getName();
echo $user2->getName();
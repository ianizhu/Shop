<?php

class Person 
{

    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother=null, $father=null) 
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }

    function sayHi($name) 
    {
        return "Hi, $name! I'm " . $this->name;
    }

    function setHp($hp) 
    {
        if ($this->hp + $hp > 100) {
            $this->hp = 100;
        } else {
            $this->hp = $this->hp + $hp;
        }
        
    }

    function getHp() 
    {
        return $this->hp;
    }

    function getName() 
    {
        return $this->name;
    }

    function getLastName() 
    {
        return $this->lastname;
    }

    function getAge() 
    {
        return $this->age;
    }

    function getMother() 
    {
        return $this->mother;
    }

    function getFather() 
    {
        return $this->father;
    }

    function getInfo() 
    {
        return "<h3>Пару слов о моих родных</h3>" . "<p> Меня зовут " . $this->getName() . " " . $this->getLastName() . ". Мне " . $this->getAge() . " лет.<br> У меня большая и дружная семья. Моих маму и папу зовут " . $this->getMother()->getName() . " " . $this->getMother()->getLastName() . " и " . $this->getFather()->getName() . " " . $this->getFather()->getLastName() . ". Им " . $this->getMother()->getAge() . " и " . $this->getFather()->getAge() . " год. <br> Еще у меня есть бабушки и дедушки. <br> Бабушку и дедушку по маминой линии зовут " . $this->getMother()->getMother()->getName() . " " . $this->getMother()->getMother()->getLastName() . " и " . $this->getMother()->getFather()->getName() . " " . $this->getMother()->getFather()->getLastName() . ". Им " . $this->getMother()->getMother()->getAge() .  " и " . $this->getMother()->getFather()->getAge() . " лет. <br> Бабушку и дедушку по папиной линии зовут " . $this->getFather()->getMother()->getName() . " " . $this->getFather()->getMother()->getLastName() . " и " . $this->getFather()->getFather()->getName() . " " . $this->getFather()->getFather()->getLastName() . ". Им " . $this->getFather()->getMother()->getAge() .  " и " . $this->getFather()->getFather()->getAge() . " года.</p>"; 
    }
}
$grigoriy = new Person("Grigoriy", "Ivanov", 72);
$ekaterina = new Person("Ekaterina", "Ivanova", 70);

$igor = new Person("Igor", "Petrov", 78);
$svetlana = new Person ("Svetlana", "Petrova", 75);

$alex = new Person("Alex", "Ivanov", 41, $ekaterina, $grigoriy);
$olga = new Person("Olga", "Ivanova", 38, $svetlana, $igor);
$valera = new Person("Valera", "Ivanov", 10, $olga, $alex);


echo $valera->getInfo();

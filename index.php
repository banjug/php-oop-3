<?php

/**
     * 
     *      Definire classe User:
     *          ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     * 
*/

class User {
    private $username;
    private $password;
    private $age;

    public function __construct($username, $password,) {
        $this->setUsername($username);
        $this->setPassword($password);
    }

    // setter
    public function setUsername($username){
        if (strlen($username)<3 || strlen($username)>16){
            throw new Exception("Lo username deve essere più lungo di 3 caratteri e più corto di 16.");
        } else {
            $this->username = $username;
        }
    }
    public function setPassword($password){
        if (ctype_alnum($password)) {
            throw new Exception("La password deve contenere almeno un carattere speciale.");
        } else {
            $this->password = $password;
        }
    }
    public function setAge($age){
        if (!is_numeric($age)) {
            throw new Exception("L'età deve essere un numero.");
        } else {
            $this->age = $age;
        }
    }

    // getter
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getAge(){
        return $this->age;
    }

    // print functions
    public function __toString(){
        return $this->getUsername() . ": " . $this->getAge() . " [" . $this->getPassword() . "]";
    }
    public function printMe(){
        echo $this;
    }
}

try {
    $u1 = new User("tommaso", "password_Sforte1");
    $u1 -> setAge(15);
    $u1->printMe();
} catch (Exception $e) {
    echo "<span>". $e->getMessage() . "</span>";
}

echo "<br><br>------------------<br><br>";

/**
     *      
     *      Definire classe Computer:
     *          ATTRIBUTI:
     *          - codice univoco
     *          - modello
     *          - prezzo
     *          - marca
     * 
     *          METODI:
     *          - costruttore che accetta codice univoco e prezzo
     *          - proprieta' getter/setter per tutte le variabili d'istanza
     *          - printMe: che stampa se stesso (come quella vista a lezione)
     *          - toString: "marca modello: prezzo [codice univoco]"
     * 
     *          ECCEZIONI:
     *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
     *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
     *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
     * 
     *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
     *      il corretto funzionamento dell'algoritmo
     * 
     *      -------------------------------------------------------------------------------------------------  
     * 
     *      Definire classe User:
     *          ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     * 
*/

class Computer {
    private $idcode;
    private $model;
    private $price;
    private $brand;

    public function __construct($idcode, $price){
        $this->setIdCode($idcode);
        $this->setPrice($price);
    }

    // setter
    public function setIdCode($idcode){
        if ((is_numeric($idcode)) && (strlen($idcode) === 6)){
            $this->idcode = $idcode;
        } else {
            throw new Exception("Il codice univoco deve essere numerico e di sei(6) cifre");
        }
    }
    public function setModel($model){
        if (strlen($model)<3 || strlen($model)>20) {
            throw new Exception("Il nome del modello deve essere tra 3 e 20 caratteri.");
        } else {
            $this->model = $model;
        }
    }
    public function setPrice($price){
        if (is_int($price) && $price>=0 && $price<=2000) {
            $this->price = $price;
        } else {
            throw new Exception("Il prezzo deve essere un intero tra 0 e 2000");
        }
    }
    public function setBrand($brand){
        if (strlen($brand)<3 || strlen($brand)>20) {
            throw new Exception("Il nome della marca deve essere tra 3 e 20 caratteri.");
        } else {
            $this->brand = $brand;
        }
    }

    // getter
    public function getIdCode(){
        return $this->idcode;
    }
    public function getModel(){
        return $this->model;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getBrand(){
        return $this->brand;
    }

    // print functions
    public function __toString(){
        return $this->getBrand() . " " . $this->getModel() . ": " . $this->getPrice() . "€ [" . $this->getIdCode() . "]";
    }
    public function printMe(){
        echo $this;
    }
}

try {
    $c1 = new Computer(123456, 2000);
    $c1->setModel("MacBook Pro");
    $c1->setBrand("Apple");
    $c1->printMe();
} catch (\Exception $f) {
    echo "<span>". $f->getMessage() . "</span>";
}



?>
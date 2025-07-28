<?php
/*Crie uma classe chamada Contact que represente um contato.

A classe Contact deve ter os seguintes atributos:

name: nome do contato.

email: endereço de e-mail do contato.

phone: número de telefone do contato.

A classe Contact deve ter os seguintes métodos:

getName(): retorna o nome do contato.

getEmail(): retorna o endereço de e-mail do contato.

getPhone(): retorna o número de telefone do contato.

setEmail($email): atualiza o endereço de e-mail do contato.

setPhone($phone): atualiza o número de telefone do contato.

*/

class Contact{
    private $name = "Gabriel";
    private $email = "gabriel@gmail.com";
    private $phone = 123459876;

    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPhone(){
        return $this->phone;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setPhone($phone){
        $this->phone = $phone;
    }
}
?>
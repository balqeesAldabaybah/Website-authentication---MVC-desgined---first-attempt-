<?php

class User{
    protected $idUser;
    protected $uidUser;
    protected $emailUser;
    protected $pwdUser;

    public function __construct($idUser,$uidUser,$emailUser,$pwdUser){
        $this->idUser = $idUser;
        $this->uidUser = $uidUser;
        $this->emailUser = $emailUser;
        $this->pwdUser = $pwdUser;
    }

    public function getUser(){
        $user = array();
        $user["idUSer"]= $this->idUser;
        $user["uidUser"]=$this->uidUser;
        $user["emailUser"]=$this->emailUser;
        $user["pwdUser"]=$this->pwdUser;
        return $user;
    }
}

?>
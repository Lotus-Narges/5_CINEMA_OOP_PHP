<?php

class Role {

    private string $_role;   // * The roles that an actor has played (Name of the role)
    private array $_castingRole;

    public function __construct(string $role){
        $this->_role = $role;
        $this->_castingRole = [];
    }

    public function setRole (string $role):void {
        $this->_role = $role;
    }

    public function getrole ():string {
        return $this->_role;
    }

    public function setCastingRole (Casting $role):void {
        $this->_castingRole[] = $role;
    }

    public function getCastingRole ():array {
        return $this->_castingRole;
    }

    public function __toString():string {
        return $this->_role;
    }

}
    


?>
<?php
namespace Acme;
class User{
    
    protected $loggedin=false;
    protected $data;
    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function isLoggedIn(){
        return $this->loggedin;
    }
}


?>
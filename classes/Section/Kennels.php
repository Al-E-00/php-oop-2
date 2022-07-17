<?php 

require_once __DIR__ . "/Products.php";

class Kennels extends Products {
    private $material;
    private $size;
    private $outdoor;
    private $portable;

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of outdoor
     */ 
    public function getOutdoor()
    {
        return $this->outdoor;
    }

    /**
     * Set the value of outdoor
     *
     * @return  self
     */ 
    public function setOutdoor($outdoor)
    {
        $this->outdoor = $outdoor;

        return $this;
    }

    /**
     * Get the value of portable
     */ 
    public function getPortable()
    {
        return $this->portable;
    }

    /**
     * Set the value of portable
     *
     * @return  self
     */ 
    public function setPortable($portable)
    {
        $this->portable = $portable;

        return $this;
    }
}
<?php 

require_once __DIR__ . "/Products.php";

class Game extends Products {
    private string $color; 
    private string $materials; 
    private string $size;
    private string $weight;
    private int $animalAge;

    function __construct($_product, $_forWhatAnimal, $_price, $_available, $_color, $_materials, $_size, $_weight, $_animalAge ) {
        parent::__construct($_product, $_forWhatAnimal, $_price, $_available);
        $this->setColor($_color);
        $this->setMaterials($_materials);
        $this->setSize($_size);
        $this->setWeight($_weight);
        $this->setAnimalAge($_animalAge);
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
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of materials
     */ 
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */ 
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }



    /**
     * Get the value of animalAge
     */ 
    public function getAnimalAge()
    {
        return $this->animalAge;
    }

    /**
     * Set the value of animalAge
     *
     * @return  self
     */ 
    public function setAnimalAge($animalAge)
    {
        $this->animalAge = $animalAge;

        return $this;
    }
}
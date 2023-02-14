<?php



class Voiture
{

    private string $_marque;
    private string $_modele;

    public function __construct(string $marque, string $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }
    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }

    public function __toString()
    {
        return $this->_marque. " " . $this->_modele;
    }
}

$v1 = new Voiture("Peugeot", "408");

class VoitureElec extends Voiture
{

    private string $marque;
    private string $modele;
    private int $autonomie;

    public function __construct(string $marque, string $modele, int $autonomie) // on met ici ce qu'on avait dans la class parent + un nouvel élément qui ici est int autonomie
    {

        parent::__construct($marque,   $modele); // hérite du parent

        $this->autonomie = $autonomie; // pas besoin de mettre $ au 1er car il est déjà contenu dans le $this
    }


    public function __toString () {
        return parent::__toString() . " " . $this->autonomie; // Parent ::__toString va récuperer le toString du parent et on va rajputer notre nouvel élément --> int autonomie
    }
}

$v2 = new VoitureElec("BMW", "I3", 100);

echo $v2;

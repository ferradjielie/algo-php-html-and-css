<?php 


class Voiture {
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_demarrer;
    

    public function __construct (string $marque, string $modele, int $nbPortes)
    {

        $this -> _marque = $marque;
        $this ->  _modele = $modele;
        $this -> _nbPortes = $nbPortes;
        $this -> _vitesseActuelle = 0;
        $this -> _demarrer = false ;
    }

    public function getMarque ( ) {
        return $this ->_marque;
    }
    public function getModele () {
        return $this -> _modele ;
    }
     
    public function getNbPortes () {
        return $this -> _nbPortes;
    }
    public function getVitesseActuelle () {
        return $this -> _vitesseActuelle;
    }
    public function getDemarrer () {
        return $this -> _demarrer;
    
    }

    public function setMarque ($nouvelleMarque) {
        $this-> _marque= $nouvelleMarque;
    }
    public function setModele ($nouveauModele) {
        $this -> _modele = $nouveauModele;
    }
    public function setNbPortes ($nouvellesportes) {
        $this-> _nbPortes= $nouvellesportes;
    }
    

    
    public function demarrer () {
        
        $this -> _demarrer = true;
        echo "Le véhicule $this démarre";
    
    }

    public function accelerer ($vitesse) {
        if($this->_demarrer) { // si la voiture est démarrée
            // alors on accélère
            $this -> _vitesseActuelle += $vitesse;
            echo "Le véhicule $this accélère de $vitesse km/h";
            // $this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse;
        } else { 
            echo "La voiture $this doit d'abord être démarrée pour pouvoir accélérer !";
        }
        
    }

    public function ralentir ($vitesse) {

        if($this->_demarrer) {
            if($vitesse > $this->_vitesseActuelle) {
                $this->_vitesseActuelle = 0;
                echo "La voiture ne peut pas rouler avec une vitesse négative !";
            } else {
                echo "le véhicule ralentit de $vitesse km/h";
                $this -> _vitesseActuelle -= $vitesse;
            }
        } else {
            "le véhicule doit d'abord être démarré pour pouvoir ralentir";
        }
    }

    public function __toString() {
        return $this->_marque." ".$this->_modele;
    }


   public function stopper () {
      $this->_demarrer = false;
      $this->_vitesseActuelle = 0;
      echo "Le véhicule $this est stoppé";
    }

   
    public function affichage () {

      return  $this-> _marque. $this -> _modele. $this -> _nbPortes;


}
}

$v1 = new Voiture("Peugeot","408",5);

$v1->demarrer();
echo "<br>" ;
$v1->accelerer(50);

echo "<br>" ;
$v1->ralentir (30);


echo "<br>" ;
$v1 -> stopper ();   

echo "<br>" ; 
echo $v1;

$v1->affichage();

$v2->affichage(); 
// rurutrutrturtu fdhytret(t)ù






















?>
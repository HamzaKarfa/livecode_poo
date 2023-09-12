<?php


class Chat {

  private int $id;
  private string $nom;
  private int $age;
  private string $race;
  private string $proprietaire; 


  public function __construct(array $data)
  {

    if (isset( $data['id'])) {
      $this->setId($data['id']);
    }
    $this->setName($data['nom']);
    $this->setAge($data['age']);
    $this->setRace($data['race']);
    $this->setProprietaire($data['proprietaire']);
  }


  public function getId() : int
  {
     return $this->id;
  }

  public function setId(int $id)
  {
    if($id < 0){
      echo 'l\'id doit être supérieur à 0 !';
    }else{
      $this->id = $id;
    }
  }

  
  public function getName() : string
  {
     return $this->nom;
  }

  public function setName(string $nom)
  {
    if(strlen($nom) < 3){
      echo 'le nom doit être supérieur à 3 caractères !';
    }else{
      $this->nom = $nom;
    }
  
  }

  public function getAge() : int
  {
     return $this->age;
  }

  public function setAge(int $age)
  {
    if($age < 0){
      echo 'l\'age doit être supérieur à 0 !';
    }else{
      $this->age = $age;
    }
  
  }

  public function getRace() :string
  {
    return $this->race;
  }
  
  public function setRace(string $race)
  {
    $this->race = $race;
  }


  public function getProprietaire() : string
  {
    return $this->proprietaire;
  }

  public function setProprietaire(string $proprietaire)
  {
    $this->proprietaire = $proprietaire;
  }



}


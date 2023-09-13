<?php

Class Player {
    private string $firstName;
    private string $lastName;
    private DateTime $birthday;
    private Country $country;
    private $careers = [];
    // private array $careers;

    public function __construct(string $firstName, string $lastName, string $birthday, Country $country)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = new \DateTime($birthday);
        $this->country = $country;
        $this->careers = [];
    }

    // Setter & Getter
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function setFirstName( string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function setLastName( string $lastName)
    {
        $this->lastName = $lastName;
    }
    
    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }
    public function setBirthday(DateTime $birthday)
    {
        $this->birthday = $birthday;
    }


    public function getCountry(): Country
    {
        return $this->country;
    }
    public function setCountry( Country $country)
    {
        $this->country = $country;
    }

    // jouter une carrière (Career) à la liste des carrières d'un joueur.
    public function addCareer(Career $career)
    {
        $this->careers[] = $career;
    }

    public function getCareer() : array 
    {
        return $this->careers;
    }


    public function calculateAge() {
        $now = new \DateTime();
        $diff = $this->birthday->diff($now);
        return $diff->format("%Y");
    }

    public function __toString() {
        $result_player = $this->firstName . " " .$this->lastName ;
        return $result_player;
    }


    // ^ funtion playerCareer avant de rajouter le html
    // public function playerCareer() {
    //     $result_player = 
    //     $this->firstName 
    //     .$this->lastName
    //     .$this->calculate_age();
    //      foreach ($this->careers as $career) {
    //         $result_player .=
    //         $career->getTeam()
    //         .$career->getJoinDate()->format('Y');
    //      }

    //     return $result_player;
    // }


    public function playerCareer() {
        $result_player = 
        '<div class="card_player">
            <div class="text_player">
                    <h2>'. $this->firstName . " " . $this->lastName . '</h2>

                    <p class="detail"> '.$this->calculateAge() . ' ans </p> <div class="text">';
        
            foreach ($this->careers as $career) {
            $result_player .=
            
             '<p>'.$career->getTeam() . ' (' . $career->getJoinDate()->format('Y')  . ') </p>' ; //? pourquoi cela génère un retour à la ligne sur la page??)
            }

        return $result_player  .'</div>
        </div></div>';

    }

}



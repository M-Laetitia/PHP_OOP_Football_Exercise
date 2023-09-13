 
 <?php 

    class Team
    {
        
        private string $nameTeam;
        private DateTime $dateCreationTeam;
        private Country $country;
        // private $careers = array();
        private array $careers;

        public function __construct (string $nameTeam, string $dateCreationTeam, Country $country) {
            $this->nameTeam = $nameTeam;
            $this->dateCreationTeam = new \DateTime($dateCreationTeam);
            $this->country = $country;
            $this->careers = [];
            //création d'une relation bidirectionnelle (ajouter dans pays)
            $country->addTeam($this);
        }

        // Getter & Setter
        public function getNameTeam(): string
        {
            return $this->nameTeam;
        }
        public function setNameTeam( string $nameTeam)
        {
            $this->nameTeam = $nameTeam;
        }

        public function getDateCreationTeam(): DateTime
        {
            return $this->dateCreationTeam;
        }
        public function setDateCreationTeam( DateTime $dateCreationTeam)
        {
            $this->dateCreationTeam = $dateCreationTeam;
        }

        public function getCountry (): Country
        {
            return $this->country;
        }

        public function setCountry(Country $country)
        {
            $this->country = $country;
        }


        public function addCareer(Career $career ) {
            $this->careers[] = $career;
        }

        public function getPlayer()
        {
            $careers = [];

            foreach ($this->careers as $career) {
                $careers[] = $career->getPlayer();
            }
            return $careers;
        }

 
        public function __toString() {
            $result_team = $this->nameTeam ;
            // . $this->dateCreationTeam->format('Y') . "<br>"
            return $result_team;
        }



        // ^ function avant de rajouter le html
        // public function teamPlayer()
        // {
        //     $result_team = 
        //          $this->nameTeam . '</br>'
        //         . $this->country->getCountryName() . " - "
        //         . $this->dateCreationTeam->format('Y') . '</br>';

        //     foreach ($this->careers as $career) {
        //         $result_team .=
        //             $career->getPlayer()->getFirstName() . ' ' . $career->getPlayer()->getLastName() . ' ('
        //             . $career->getJoinDate()->format('Y') . ') </br>';
        //     }

        //     return $result_team;
        // }

        
        public function teamPlayer()
        {
            $result_team = 
            '<div class="card_team">
                <div class="text_team">
                        <h2>'.$this->nameTeam . '</h2>
                        <p class="detail">' . $this->country->getCountryName() . " - " . $this->dateCreationTeam->format('Y') . '<div class="text"></p>' ;

            foreach ($this->careers as $career) {
                $result_team .=
                '<p>'. $career->getPlayer()->getFirstName() . ' ' . $career->getPlayer()->getLastName() . ' (' . $career->getJoinDate()->format('Y') . ') </p>' ;
    
            }
            return $result_team . '</div>
            </div></div>';
        }
            
    }



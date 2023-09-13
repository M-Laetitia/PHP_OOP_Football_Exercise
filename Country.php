
<?php

    Class Country {
        private string $countryName;
        private array $teams;
     
        public function __construct(string $countryName)
        {
            $this->countryName = $countryName;
            $this->teams= [];
        }

        // Setter & Getter
        public function getCountryName(): string
        {
            return $this->countryName;
        }
        public function setCountryName(string $countryName)
        {
            $this->countryName = $countryName;
        }

        public function addTeam(Team $team)
        {
            $this->teams[] = $team;
        }
        public function getTeamCountry() : Country
        {
            return $this->country;
        }


        public function __toString() {
            $result_country = $this->countryName;
            return $result_country;
        }


        // ^ function avant de rajouter le html
        // public function teamCountry(){
        //     $result_country = 
        //     $this->countryName. "<br>"; 
        //     foreach ($this->teams as $team) {
        //         $result_country .=
        //         $team->getNameTeam() . "<br>"; 
        //     }

        //     return $result_country;
        // }

        public function teamCountry(){
            $result_country = 
            '<div class="card_country">
                <div class="text_country">
                <h2>' . $this->countryName . '</h2>
                <div class="text">';
            
            foreach ($this->teams as $team) {
                $result_country .=
                '<p>'.$team->getNameTeam() . '</p>'; 
            }

            return $result_country . '</div>
            </div></div>';
        }
    
    }


    



?>


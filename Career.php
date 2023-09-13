
<?php 

    Class Career
    {
        private Team $team;
        private DateTime $joinDate;
        private Player $player;

        public function __construct(Team $team, string $joinDate, Player $player) {
            $this->team = $team;
            $this->joinDate = new \DateTime($joinDate);
            $this->player = $player;

            // utilisées pour établir une relation bidirectionnelle entre les objets Team, Player et Career.
            $this->team->addCareer($this);
            $this->player->addCareer($this);
        
        }

    
        // Getter et Setter
        public function getTeam() : Team
        {
            return $this->team;
        }
        public function setTeam(Team $team)
        {
            $this->team = $team;
        }

        public function getJoinDate() : DateTime
        {
            return $this->joinDate;
        }
        public function setJoinDate(DateTime $joinDate)
        {
            $this->joinDate = $joinDate;
        }

        public function getPlayer() : Player
        {
            return $this->player;
        }
        public function setPlayer(Player $player)
        {
            $this->player = $player;
        }

    }

?>

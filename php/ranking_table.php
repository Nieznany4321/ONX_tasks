<?php
class RankingTable
{
  public function __construct(array $players)
  {
        foreach($players as $id => $values){

            //creating values for each player
            $this->scoreBoard[$values] = array(
                "index" => $id,
                "games_no" => 0,
                "points" => 0
            );
            
        }
    }
    public function recordResult($name, $points){
        $this->scoreBoard[$name]["games_no"]++;
        $this->scoreBoard[$name]["points"] = $points;
        echo("$name:");
        print_r($this->scoreBoard[$name]);

    }     
    public function playerRank(int $rank)
    {
       $result = '';
     
       uasort($this->scoreBoard, function ($player1, $player2) {
            $id = $player2['points'] - $player1['points'];
            if (!$id) {
                 $id = $player2['games_no'] - $player1['games_no'];
            }
            if (!$id) {
                $id = $player2['index'] - $player1['index'];
            }
           return $id;
         });
         if ($rank > count($this->scoreBoard)) {
              $rank = count($this->scoreBoard);
         }

         $index = 1;
         foreach ($this->scoreBoard as $player => $player_values) {
           if ($index == $rank) {
               $result = $player;
               break;
            } else {
               $index++;
               continue;
           }
         }
        return $result;
       }    

    
}
   

 $table= new RankingTable(array("Jan", "Maks", "Monika"));

 $table->recordResult("Jan", 2);
 $table->recordResult("Maks", 3);
 $table->recordResult("Monika", 5);
 echo $table->playerRank(1);





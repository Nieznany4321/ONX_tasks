<?php

class Tezaurus
{
    public $tezaurus = array();

    function __construct(array $tezaurus)
    {
        $this->tezaurus = $tezaurus;
    }

    public function getSynonyms(string $word)
    {
        $result = '';
        if (array_key_exists($word, $this->tezaurus)) {
           echo('{"word":'.json_encode($word).',"synonyms":'.json_encode($this->tezaurus[$word]).'}');
        }
        else{
        echo($result = '{"word":'.json_encode($word).',"synonyms":[]}');
        }

    }
}

$tezaurus = array("market" => array("trade"), "small" => array("little", "compact"));

$dictionary = new Tezaurus($tezaurus);
$dictionary->getSynonyms("small");
echo "\n";
$dictionary->getSynonyms("asleast");


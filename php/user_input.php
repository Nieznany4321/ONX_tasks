
<?php
class TextInput
{
    public $output='';

    public function add($text)
    {
     $this->output= $this->output.$text;
    }

    public function getValue()
    {
      return $this->output;
    }
}

class NumericInput extends TextInput
{

  public function add($text)
  {
   $new_text = preg_replace('/\D/', '', $text);
   $this->output= $this->output.$new_text;
  }

}


?>


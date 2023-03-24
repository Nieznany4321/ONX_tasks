<?php 
        function make(...$funcs)
{
    return function($arg) use ($funcs)
    {
      foreach ($funcs as $func) {
        $arg = $func($arg);
      }
      return $arg;
    };
}
 
$fun = make( function($x) { return $x * 3; },
                      function($x) { return $x + 1; },
                      function($x) { return $x / 2; } );
echo $fun(3); 
 
?>
    

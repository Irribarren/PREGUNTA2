<?php
function PRIMO($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = PRIMO(45);
if ($a==0)
echo 'NO ES UN NUMERO PRIMO'."\n";
else
echo 'SI ES UN NUMERO PRIMO'."\n";
?>
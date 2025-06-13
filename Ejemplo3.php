<?php
 $x = 1;
 trigger_error("user warning!", E_USER_WARNING);
 $x = 3;
 echo "$x is  ${$x}";

?>
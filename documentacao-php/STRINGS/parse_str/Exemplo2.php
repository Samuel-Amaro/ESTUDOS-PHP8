<?php 

/**
 * * EXEMPLO #2 parse_str() nome mutilado
 *  
*/

//parse_str("My Value=Something");
//echo $My_Value;

parse_str("My Value=Something", $output);
echo $output['My_Value']; //Something
?>
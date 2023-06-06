<?php

//Variables:
$family= array('Logan','Marine','Wendy','Eloise','Paco','Papuche');
$recipes= array('coq au vin','ratatouille','crème brulée','quiche lorraine','tarte tatin','crepes Suzette');
$film= array ('Shining','Vol au-dessus d un nid de coucou','Alien','Psychose','Inception','Get Out', 'Shutter Island');


echo'<pre>';
print_r($family);
echo'</pre>';

echo'<pre>';
print_r($recipes);
echo'</pre>';

echo'<pre>';
print_r($film);
echo'</pre>';

echo $film[1];

?>

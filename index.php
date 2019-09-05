<?php

$text =  'Keiksmais isliejamas pasipiktinimas ar atsikertama izeidimu, bet nelinkima pikto. 
Dazniausiai prisegami pazyminiai senas, kuris reiskia ne tiek amziu, kiek apskritai niekinama vertinima.
Pavyzdziui: prakeiktas asilas, prakeikta gyvate, rupus miltai.';

$keiksmazodziai = [
    
'1' => 'prakeiktas asilas',
'2' => 'prakeikta gyvate',
'3' => 'rupus miltai',
    
];

$pakeitimai = [
    '1' => '***',
    '2' => '***',
    '3' => '***',
];


$text3 = str_ireplace($keiksmazodziai, $pakeitimai, $text);
print $text3;

?>
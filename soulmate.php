<?php
$mother = array('firstname' => 'babla',
            'lastname'=> 'koni',
            'season'=> 'summer',
            'soccer'=> 'true',
            'hobies'=> 'hobies'
);
echo '<pre>';
print_r($mother);
echo '</pre>';



$mine = array('firstname' => 'Ellen',
            'lastname'=> 'Niyobuhungiro',
            'season'=> 'summer',
            'soccer'=> 'false',
            'hobies'=> array('reading books','gardening','runing'),
            'mother'=> $mother
);
echo '<pre>';
print_r($mine);
echo  '</pre>';
$_new= array('lastname'=>'durand');
$mine=(array_replace($mine,$_new));
echo '<pre>';
print_r($mine);


// soulmate
$soulmate =array('firstname' => 'sten',
'lastname'=> 'saven',
'season'=> 'summer',
'soccer'=> 'false',
'hobies'=> array('reading books','gardening','runing'),
'mother'=> 'serberger'
);
print_r($soulmate);
echo '<pre>';
print_r(array_intersect($soulmate, $mine));
echo '<pre>';
?>
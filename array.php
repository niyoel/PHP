<?php
// $me = array('firstname' => 'Ellen',
//             'lastname'=> 'Niyobuhungiro',
//             'season'=> 'summer',
//             'soccer'=> 'false',
//             'hobies'=> array('reading books','gardening','runing')
// );

// echo  '<pre>';
// print_r($me);
// echo  '</pre>';
// echo $me['firstname'];
// echo  '</pre>';
// $countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
// echo '<pre>';
// print_r($countries);
// array_push($countries, 'England');
// echo '<pre>';
// print_r($countries);
echo '<hr>';
// // Create an array representing your family members


// $family= array('Kesi','jacqueline','william','assinath','grace','scadrach','esseza');
// echo '</pre>';
// print_r($family);
// $recipes= array('Pasta','salmon','peas','Sausage','mushroom','ragu');
// echo '<pre>';
// print_r($recipes);
// $films= array('love comes softly','notebook','madea'); ?><br><?php
// echo '</pre>';
// print_r($films[2]);

// Multidimensional arrays

$me = array(
	'age'	=> 45 , 
	'firstname' 		=> 'Alexandre' ,
	'lastname' 	  		=> 'Plennevaux' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')
);

echo '<pre>';
print_r($me);
echo '</pre>';

echo '<hr>';

$mother = array('firstname' => 'babla',
            'lastname'=> 'koni',
            'season'=> 'summer',
            'soccer'=> 'true',
            'hobies'=> array('reading books','gardening','runing')
);
echo '<pre>';
print_r($mother);
echo '</pre>';



$me = array('firstname' => 'Ellen',
            'lastname'=> 'Niyobuhungiro',
            'season'=> 'summer',
            'soccer'=> 'false',
            'hobies'=> array('reading books','gardening','runing','drink'),
            'mother'=> $mother
);
echo '<pre>';
print_r($me);
echo  '</pre>';
$_new= array('lastname'=>'durand');
$me=(array_replace($me,$_new));
echo '<pre>';
print_r($me);


// soulmate
$soulmate =array(
'firstname' => 'sten',
'lastname'=> 'saven',
'season'=> 'summer',
'soccer'=> 'false',
'hobies'=> array(
    'reading books','gardening','runing','eat'),
'mother'=> 'serberger'
);
echo '<hr>';
// print_r($soulmate);
echo '<pre>';
$possible_hobbies_via_intersection=(array_intersect($soulmate['hobies'], $me['hobies']));
echo '<pre>';
$possible_hobbies_via_merge = array_merge($me, $soulmate);
print_r($possible_hobbies_via_intersection);
echo '<pre>';
print_r($possible_hobbies_via_merge);
echo '<pre>';

echo '<hr>';
$web_development = array('frontend'=> array(),'backend'=>array());
array_push($web_development['frontend'],'xhtml');
array_push($web_development['backend'],'Ruby');
array_push($web_development['frontend'],'CSS');
array_push($web_development['frontend'],'Flash');
array_push($web_development['backend'],'JavaScript');
array_push($web_development['frontend'],'JavaScript');
print_r($web_development);
$html = array('html');
echo '<hr>';
$replace=array_replace($web_development['frontend'],$html);
 print_r($replace);
echo '<hr>';
array_splice($web_development['frontend'],2);
print_r($web_development);
?>


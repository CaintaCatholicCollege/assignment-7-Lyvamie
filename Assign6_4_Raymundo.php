<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equip="author" content="RAYMUNDO, LYVAMIE S.">
	<title>Assign6_4</title>
</head>

<body>

   <?php

      $ceu = array( "Italy"=>"Rome",
         "Luxembourg"=>"Luxembourg",
         "Belgium"=> "Brussels", 
         "Denmark"=>"Copenhagen",
         "Finland"=>"Helsinki", 
         "France" => "Paris",
         "Slovakia"=>"Bratislava", 
         "Slovenia"=>"Ljubljana",
         "Germany" => "Berlin", 
         "Greece" => "Athens",
         "Ireland"=>"Dublin", 
         "Netherlands"=>"Amsterdam",
         "Portugal"=>"Lisbon", 
         "Spain"=>"Madrid",
         "Sweden"=>"Stockholm", 
         "United Kingdom"=>"London",
         "Cyprus"=>"Nicosia", 
         "Lithuania"=>"Vilnius",
         "Czech Republic"=>"Prague", 
         "Estonia"=>"Tallin",
         "Hungary"=>"Budapest", 
         "Latvia"=>"Riga",
         "Malta"=>"Valetta",
         "Austria" => "Vienna", 
         "Poland"=>"Warsaw") ;
      asort($ceu) ;
         foreach($ceu as $country => $capital)
      {
         echo "The capital of $country is $capital"."<br>" ;
      }

   ?>

</body>
</html>
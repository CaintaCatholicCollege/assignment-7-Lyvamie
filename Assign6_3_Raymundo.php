<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equip="author" content="RAYMUNDO, LYVAMIE S.">
	<title>Assign6_3</title>
</head>
<body>
    <h3>
        <?php
            $age = 17;
            echo "You are $age years old and...<br/><br/>";
            function readytoVote($age){
                $voter = $age;
                if($voter<18){
                    echo "You are too young to vote.";
                }else{
                    echo "You are legal to vote.";
                }
            }
            echo readytoVote($age);
        ?>
    </h3>
</body>
</html>
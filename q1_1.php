<?php
$user1 = [];
array_push($user1, $_GET["user11"], $_GET["user12"], $_GET["user13"], $_GET["user14"], $_GET["user15"]);
$user2 = [];
array_push($user2, $_GET["user21"], $_GET["user22"], $_GET["user23"], $_GET["user24"], $_GET["user25"]);
$user3 = [];
array_push($user3, $_GET["user31"], $_GET["user32"], $_GET["user33"], $_GET["user34"], $_GET["user35"]);

echo "User 1 : ".implode(", ",$user1);
echo "<br><br>User 2 : ".implode(", ",$user2);
echo "<br><br>User 3 : ".implode(", ",$user3);

checkAbove5($user1);
checkBelow5($user2);
checkLargest($user3);

function checkAbove5($user1){
    $i = 0;
    while($i < sizeof($user1)){
        if($user1[$i]<5){
            array_splice($user1, $i, 1);
            $i = 0;
        } else $i++;
    }
    echo "<br><br>User 1, >= 5: ".implode(", ",$user1);
}

function checkBelow5($user2){
    $i = 0;
    while($i < sizeof($user2)){
        if($user2[$i]>5){
            array_splice($user2, $i, 1);
            $i = 0;
        } else $i++;
    }
    echo "<br><br>User 2, <= 5: ".implode(", ",$user2);
}

function checkLargest($user3){
    $i = 0;
    $newUser3 = [];
    $newUser3[0] = $user3[0];
    for($i=0; $i<3; $i++){
        for($j=0; $j<sizeof($user3); $j++){
            if($newUser3[$i] <= $user3[$j]){
                $newUser3[$i] = array_slice($user3, $j, 1);
            
            }
        }
    }

    echo "<br><br>User 3 largest 3: ".implode(", ",$newUser3);
}
?>
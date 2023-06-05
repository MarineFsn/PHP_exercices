<?php

// 2. "Different greetings according to time" Exercise

$now = date("H:i");
echo $now;
if ($now >= "05:00" && $now <= "09:00") {
    echo "Good morning !";
} elseif ($now >= "09:01" && $now <= "12:00") {
    echo " Good day !";
} elseif ($now >= "12:01" && $now <= "16:00") {
    echo " Good afternoon !";
} elseif ($now >= "16:01" && $now <= "21:00") {
    echo " Good evening !"; 
} elseif ($now >= "21:01" && $now <= "04:59") {
    echo " Good night !";
}

?>
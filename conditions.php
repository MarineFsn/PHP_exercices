<?php

// 1.2 Clean your room Exercise, improved

$possible_states = array(
    1 => "health hazard",
    2 => "filthy",
    3 => "dirty",
    4 => "clean",
    5 => "immaculate"
);


$room_filthiness = $possible_states[1];

if ($room_filthiness == $possible_states[1]) {
    echo "Even rats don't want to sleep here.";
} else if ($room_filthiness == $possible_states[2]) {
    echo "Yuck! The room is dirty. Let's clean it up!";
} else if ($room_filthiness == $possible_states[3]) {
    echo "Yuck! The room is dirty. Let's clean it up!";
} else if ($room_filthiness == $possible_states[4]) {
    echo "Your room looks like heaven.";
} else {
    echo "Call the cops!";
}

?>






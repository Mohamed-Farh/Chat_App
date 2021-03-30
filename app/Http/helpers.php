<?php

// This Function To Get First Letter Of First Name And Last Name
function makeImageFromName($name) {
    $userImage = "";
    $shortName = "";

    $names = explode(" ", $name);

    foreach ($names as $w) {
        $shortName .= $w[0];
    }

    $userImage = '<div class="name-image bg-primary">'.$shortName.'</div>';
    return $userImage;
}
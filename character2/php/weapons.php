<?php

    function getWeapon($input)
    {
        $a00 = array("Dagger", "1d4", 1);
        $a01 = array("Daggers x 2", "1d4", 2);
        $a02 = array("Daggers x 3", "1d4", 3);
        $a03 = array("Dagger, silver", "1d4", 1);
        $a04 = array("Dagger, silver x 2", "1d4", 2);
        $a05 = array("Dagger, silver x 3", "1d4", 3);


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05);
        
        return $array1[$input];
        
    }

function isWeaponTwoHanded($input, $value)
{
    if($input === "Axe, battle+")
    {
        $value += 1;
    }
    else if($input === "Flail, heavy+")
    {
        $value += 1;
    }
    else if($input === "Hammer, war+")
    {
        $value += 1;
    }
    else if($input === "Morningstar+")
    {
        $value += 1;
    }
    else if($input === "Pick, heavy+")
    {
        $value += 1;
    }
    else if($input === "Pole Arm+")
    {
        $value += 1;
    }
    else if($input === "Quarterstaff+")
    {
        $value += 1;
    }
    else if($input === "Sword, two-handed+")
    {
        $value += 1;
    }
    else if($input === "Trident+")
    {
        $value += 1;
    }
    
    return $value;
    
}

function isWeaponBastardSword($input, $value)
{
    if($input === "Sword, bastard^")
    {
        $value = 100;
    }
    return $value;
}

function weaponNotes($value)
{
    $comments = "";
    
    if($value >= 1 && $value <= 20)
    {
        $comments = "+ Two-handed weapon";
    }
    else if($value === 100)
    {
        $comments = "^ Can be used one-handed or two-handed";
    }
    else if($value > 100)
    {
        $comments = "+ Two-handed weapon<br/>^ Can be used one-handed or two-handed";
    }
    
    return $comments;
    
}


    function getRandomWeapons()
    {
        
        $weaponsHas = array();

        $number = rand(0, 2);
        $number2 = rand(3, 5);

        array_push($weaponsHas, $number);
        array_push($weaponsHas, $number2);
        return $weaponsHas;
    }




?>
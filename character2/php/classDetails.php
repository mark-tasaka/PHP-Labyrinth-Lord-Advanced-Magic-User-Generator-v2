<?php

/*Magic-User */

function getHitPoints($level, $conMod)
{
    $hitPoints = 0;

    if($level < 10)
    {
        for($i = 0; $i < $level; ++$i)
        {
            $levelHP = rand(2, 4);
            $levelHP += $conMod;
    
            if($levelHP < 2)
            {
                $levelHP = 2;
            }
    
            $hitPoints += $levelHP;
    
        }
    }
    else
    {
        for($i = 0; $i < 10; ++$i)
        {
            $levelHP = rand(2, 4);
            $levelHP += $conMod;
    
            if($levelHP < 2)
            {
                $levelHP = 2;
            }
    
            $hitPoints += $levelHP;
    
        }

        $levelTenPlusHP = ($level - 9);

        $hitPoints += $levelTenPlusHP;

    }


    return $hitPoints;

}

//cleric d8
function getAdvancedHitPoints($level, $conMod)
{
    $hitPoints = 0;

    if($level < 10)
    {
        for($i = 0; $i < $level; ++$i)
        {
            $levelHP = rand(3, 8);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }
    }
    else
    {
        for($i = 0; $i < 10; ++$i)
        {
            $levelHP = rand(3, 8);
            $levelHP += $conMod;
    
            if($levelHP < 3)
            {
                $levelHP = 3;
            }
    
            $hitPoints += $levelHP;
    
        }

        $levelTenPlusHP = ($level - 9);

        $hitPoints += $levelTenPlusHP;

    }


    return $hitPoints;

}


function saveBreathAttack($level)
{
    if($level <= 5)
    {
        return 16;
    }
    else if($level >= 6 && $level <= 10)
    {
        return 14;
    }
    else if($level >= 11 && $level <= 15)
    {
        return 12;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 8;
    }
    else
    {
        return 7;
    }

}


function savePoisonDeath($level)
{
    if($level <= 5)
    {
        return 13;
    }
    else if($level >= 6 && $level <= 10)
    {
        return 11;
    }
    else if($level >= 11 && $level <= 15)
    {
        return 9;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 7;
    }
    else
    {
        return 6;
    }
}


function savePetrify($level)
{
    if($level <= 5)
    {
        return 13;
    }
    else if($level >= 6 && $level <= 10)
    {
        return 11;
    }
    else if($level >= 11 && $level <= 15)
    {
        return 9;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 6;
    }
    else
    {
        return 5;
    }

}


function saveWands($level)
{
    if($level <= 5)
    {
        return 13;
    }
    else if($level >= 6 && $level <= 10)
    {
        return 11;
    }
    else if($level >= 11 && $level <= 15)
    {
        return 9;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 5;
    }
    else
    {
        return 4;
    }
}


function saveSpells($level)
{
    if($level <= 5)
    {
        return 14;
    }
    else if($level >= 6 && $level <= 10)
    {
        return 12;
    }
    else if($level >= 11 && $level <= 15)
    {
        return 8;
    }
    else if($level >= 16 && $level <= 18)
    {
        return 6;
    }
    else
    {
        return 4;
    }

}


function primeReq($abilityScore)
{
    
    if($abilityScore >= 3 && $abilityScore <=5)
        {
            return "-10% Experience Point Adjustment (Prime Requisite)<br/>";
        }
    else if($abilityScore >= 6 && $abilityScore <=8)
        {
            return "-5% Experience Point Adjustment (Prime Requisite)<br/>";
        }
    else if($abilityScore >= 13 && $abilityScore <=15)
        {
            return "+5% Experience Point Adjustment (Prime Requisite)<br/>";
        }
    else if($abilityScore >= 16 && $abilityScore <=18)
        {
            return "+10% Experience Point Adjustment (Prime Requisite)<br/>";
        }
    else
        {
            return "";
        }
    
}

function secondAttack($level)
{
    if($level >= 15 && $level <= 18)
    {
        return "Fighter has 2 attacks per round.";
    }
    else if($level > 18)
    {
        return "Fighter has 3 attacks per round.";
    }
    else
    {
        return "";
    }

}


function strengthModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 to hit, damage & forcing doors";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 to hit, damage & forcing doors";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 to hit, damage & forcing doors";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 to hit, damage & forcing doors";
        }
    else if($abilityScore === 19)
        {
            $desc = "+3 to hit (+4 damage), damage & forcing doors";
        }
    
    return $desc;
}


function dexterityModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "+3 AC; -3 Missile Attack; -2 Optional Initiative";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+2 AC; -2 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 AC; -1 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 AC; +1 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-2 AC; +2 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore === 18)
        {
            $desc = "-3 AC; +3 Missile Attack; +2 Optional Initiative";
        }   
    else if($abilityScore === 19)
        {
            $desc = "-4 AC; +3 Missile Attack; +2 Optional Initiative";
        }
    
    return $desc;
}

function constitutionModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Hit Points per Hit Die; -2 Poison Save adj";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Hit Points per Hit Die; -1 Poison Save adj";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Hit Points per Hit Die";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Hit Points per Hit Die";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Hit Points per Hit Die";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Hit Points per Hit Die";
        }   
    else if($abilityScore === 19)
        {
            $desc = "+4 Hit Points per Hit Die; +1 Poison Save adj";
        }
    
    return $desc;
}


function intelligenceModifierDescription($abilityScore)
{
    $desc = "Able to read and write";
    
    if($abilityScore === 3)
        {
            $desc = "Unable to read or write; broken speech";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "Unable to read or write";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "Partial ability to write";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Languages; Able to read and write";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Languages; Able to read and write";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Languages; Able to read and write";
        }
    
    return $desc;
}


function wisdomModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Saving Throw against all magical effects";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Saving Throw against all magical effects";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Saving Throw against all magical effects";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Saving Throw against all magical effects";
        }   
    else if($abilityScore === 19)
    {
        $desc = "+4 Saving Throw against all magical effects";
    }
    
    return $desc;
}



function charismaModifierDescription($abilityScore)
{
    $desc = "+0 Reaction Ajustment; Max Retainers 4; Retainer Morale 7";
    
    if($abilityScore === 3)
        {
            $desc = "+2 Reaction Ajustment; Max Retainers 1; Retainer Morale 4";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 2; Retainer Morale 5";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 3; Retainer Morale 6";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 5; Retainer Morale 8";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 6; Retainer Morale 9";
        }
    else if($abilityScore === 18)
        {
            $desc = "-2 Reaction Ajustment; Max Retainers 7; Retainer Morale 10";
        }
    
    return $desc;
}


function getThaco($level, $abiltyMod)
{
    if($level >= 1 && $level <= 3)
    {
        $thaco = 19;
    }
    else if($level >= 4 && $level <= 7)    
    {
        $thaco = 18;
    }
    else if($level >= 8 && $level <= 10)    
    {
        $thaco = 17;
    }
    else if($level >= 11 && $level <= 12)    
    {
        $thaco = 16;
    }
    else if($level == 13)    
    {
        $thaco = 15;
    }
    else if($level >= 14 && $level <= 15)    
    {
        $thaco = 14;
    }
    else if($level >= 16 && $level <= 18)    
    {
        $thaco = 13;
    }
    else
    {
        $thaco = 12;
    }

    $thaco -= $abiltyMod;

    return $thaco;
}


function getThacoCheck($score)
{
    if($score <= 2)
    {
        $score = 2;
    }

    return $score;
}

function startingAge($species)
{
    $age = 0;

    if($species == "Human")
    {
        $age += 27;
        $dieRoll = rand(1, 6);
        $age += $dieRoll;
    }

    if($species == "Dwarf")
    {
        $age += 40;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $dieRoll3 = rand(1, 6);
        $dieRoll4 = rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
        $age += $dieRoll4;
    }

    if($species == "Elf")
    {
        $age += 150;
        $dieRoll = rand(1, 8);
        $dieRoll2= rand(1, 8);
        $dieRoll3 = rand(1, 8);
        $dieRoll4 = rand(1, 8);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
        $age += $dieRoll4;
    }

    if($species == "Gnome")
    {
        $age += 60;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $dieRoll3 = rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
    }

    if($species == "Halfling")
    {
        $age += 20;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
    }

    if($species == "Half-Elf")
    {
        $age += 35;
        $dieRoll = rand(1, 4);
        $dieRoll2= rand(1, 4);
        $dieRoll3 = rand(1, 4);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
    }

    if($species == "Half-Orc")
    {
        $age += 14;
        $dieRoll = rand(1, 4);
        $age += $dieRoll;
    }

    return $age;

}

function mageAbilities($level)
{
    
    if($level == 9 || $level == 10)
        {
            $message = "Ability to create spells and magic items.";
        }
    else if($level >= 11)
        {
            $message = "Ability to create spells and magic items.<br/>Can build a stronghold (i.e. wizard's tower); attract 1d6 magic-user apprentices (Level 1-3).";
        }
    else
    {
        $message = "";
    }
    
    return $message;
}



function spellProbability ($intelligence)
{
    $message = "";
    
    if($intelligence === 3)
        {
            $message = "20% spell learning probability; minimum spells per level: 2; maximum spells per level: 3";
        }
    else if($intelligence >= 4 && $intelligence <= 5)
        {
            $message = "30% spell learning probability; minimum spells per level: 2; maximum spells per level: 4";
        }
    else if($intelligence >= 6 && $intelligence <= 7)
        {
            $message = "35% spell learning probability; minimum spells per level: 2; maximum spells per level: 5";
        }
    else if($intelligence >= 8 && $intelligence <= 9)
        {
            $message = "40% spell learning probability; minimum spells per level: 3; maximum spells per level: 6";
        }
    else if($intelligence >= 10 && $intelligence <= 12)
        {
            $message = "50% spell learning probability; minimum spells per level: 4; maximum spells per level: 7";
        }
    else if($intelligence >= 13 && $intelligence <= 14)
        {
            $message = "70% spell learning probability; minimum spells per level: 5; maximum spells per level: 9";
        }
    else if($intelligence >= 15 && $intelligence <= 16)
        {
            $message = "75% spell learning probability; minimum spells per level: 6; maximum spells per level: 11";
        }
    else if($intelligence === 17)
        {
            $message = "85% spell learning probability; minimum spells per level: 7; maximum spells per level: Unlimited";
        }
    else if($intelligence === 18)
        {
            $message = "90% spell learning probability; minimum spells per level: 8; maximum spells per level: Unlimited";
        }
    
    return $message;
}

?>
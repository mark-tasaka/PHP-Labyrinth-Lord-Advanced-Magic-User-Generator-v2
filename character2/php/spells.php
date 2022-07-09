<?php

function spellsLevel1($level)
{
    if($level == 1)
    {
        return 1;
    }
    else if($level >= 2 && $level <= 6)
    {
        return 2;
    }
    else if($level >= 7 && $level <= 10)
    {
        return 3;
    }
    else if($level >= 11 && $level <= 14)
    {
        return 4;
    }
    else if($level >= 15 && $level <= 18)
    {
        return 5;
    }
    else
    {
        return 6;
    }

}


function spellsLevel2($level)
{
    if($level == 3)
    {
        return 1;
    }
    else if($level >= 4 && $level <= 7)
    {
        return 2;
    }
    else if($level >= 8 && $level <= 11)
    {
        return 3;
    }
    else if($level >= 12 && $level <= 15)
    {
        return 4;
    }
    else if($level >= 16 && $level <= 19)
    {
        return 5;
    }
    else if($level == 20)
    {
        return 6;
    }
    else
    {
        return 0;
    }

}


function spellsLevel3($level)
{  

    if($level == 5)
    {
        return 1;
    }
    else if($level >= 6 && $level <= 8)
    {
        return 2;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 3;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 4;
    }
    else if($level >= 17 && $level <= 20)
    {
        return 5;
    }
    else
    {
        return 0;
    }


}



function spellsLevel4($level)
{
    
    if($level == 7)
    {
        return 1;
    }
    else if($level >= 8 && $level <= 9)
    {
        return 2;
    }
    else if($level >= 10 && $level <= 13)
    {
        return 3;
    }
    else if($level >= 14 && $level <= 17)
    {
        return 4;
    }
    else if($level >= 18 && $level <= 20)
    {
        return 5;
    }
    else
    {
        return 0;
    }

}


function spellsLevel5($level)
{
    if($level == 9)
    {
        return 1;
    }
    else if($level >= 10 && $level <= 11)
    {
        return 2;
    }
    else if($level >= 12 && $level <= 14)
    {
        return 3;
    }
    else if($level >= 15 && $level <= 18)
    {
        return 4;
    }
    else if($level >= 19 && $level <= 20)
    {
        return 5;
    }
    else
    {
        return 0;
    }

}

function spellsLevel6($level)
{
    if($level == 11)
    {
        return 1;
    }
    else if($level >= 12 && $level <= 13)
    {
        return 2;
    }
    else if($level >= 14 && $level <= 15)
    {
        return 3;
    }
    else if($level >= 16 && $level <= 20)
    {
        return 4;
    }
    else
    {
        return 0;
    }

}


function spellsLevel7($level)
{
    if($level == 13)
    {
        return 1;
    }
    else if($level >= 14 && $level <= 15)
    {
        return 2;
    }
    else if($level == 16)
    {
        return 3;
    }
    else if($level >= 17 && $level <= 20)
    {
        return 4;
    }
    else
    {
        return 0;
    }

}



function spellsLevel8($level)
{
    if($level == 15)
    {
        return 1;
    }
    else if($level == 16)
    {
        return 2;
    }
    else if($level == 17)
    {
        return 3;
    }
    else if($level >= 18 && $level <= 20)
    {
        return 4;
    }
    else
    {
        return 0;
    }

}


function spellsLevel9($level)
{
    if($level == 17)
    {
        return 1;
    }
    else if($level == 18)
    {
        return 2;
    }
    else if($level == 19)
    {
        return 3;
    }
    else if($level == 20)
    {
        return 4;
    }
    else
    {
        return 0;
    }

}


?>
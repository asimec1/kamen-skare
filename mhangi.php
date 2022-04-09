<?php

// 0 - papir  1 - kamen  2 - skare

    $rand = rand(0,2);

    $odabir = $_POST['odabir'];

    if ($odabir == "papir" and $rand == 0)
    {
        echo "<p> Isti odabir!</p>";
    }
    else if($odabir == "papir" and $rand == 1)
    {
        echo "<p> Pobijedili ste! Protivnik je odabrao kamen! </p>";
    }
    else if($odabir == "papir" and $rand == 2)
    {
        echo "<p> Izgubili ste! Protivnik je odabrao skare! </p>";
    }

    else if ($odabir == "kamen" and $rand == 1)
     {
        echo "<p> Isti odabir!</p>";
     }
     else if($odabir == "kamen" and $rand == 0)
     {
         echo "<p> Izgubili ste! Protivnik je odabrao papir! </p>";
     }
     else if($odabir == "kamen" and $rand == 2)
     {
         echo "<p> Pobijedili ste! Protivnik je odabrao skare! </p>";
     }

    else if ($odabir == "skare" and $rand == 2)
     {
        echo "<p> Isti odabir!</p>";
     }
     else if($odabir == "skare" and $rand == 0)
     {
        echo "<p> Pobijedili ste! Protivnik je odabrao papir! </p>";
     }
     else
     {
        echo "<p> Izgubili ste! Protivnik je odabrao kamen! </p>";
     }




?>
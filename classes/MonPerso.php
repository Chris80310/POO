<?php

    require 'Personnage.class.php';

    $p = new Personnage();
    $p->setNom("Redfield");
    $p->setPrenom("Chris");
    echo ($p);
?>
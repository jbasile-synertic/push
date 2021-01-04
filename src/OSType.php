<?php

namespace SynerticPush;

include "./OS.php";
/**
 * Class OSType
 * Plateforme ciblée lors de l'envoi de la campagne de push
 */
 abstract class OSType extends OS
{
    /**
     * Doit être utilisé uniquement si la campagne doit cibler les deux plateformes prises en charge (Android / iOS) :
     */
    public const BOTH = "both";

}


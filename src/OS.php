<?php

namespace SynerticPush;

/**
 * Class OS Permet de définir les OS des devices supportés par l'envoi de push
 * Plateformes supportées
 */
abstract class OS
{
    /**
     * identifie le terminal en tant que "Android" :
     */
    public const ANDROID = "android";

    /**
     * identifie le terminal en tant que "iOS" :
     */
    public const IOS = "ios";
}
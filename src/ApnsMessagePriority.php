<?php

namespace SynerticPush;

/**
 * Class ApnsMessagePriority
 * Priorité d'un message à envoyer aux appareils iOS.
 */
abstract class ApnsMessagePriority
{

    /**
     * Specify 5 to send the notification based on power considerations on the user’s device.
     */
    public const NORMAL = "5";


    /**
     * 	Priorité par défaut.
     * The priority of the notification.
     * If you omit this header,
     * APNs sets the notification priority to 10.
     * Specify 10 to send the notification immediately.
     */
    public const HIGH = "10";



}
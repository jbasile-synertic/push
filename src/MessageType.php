<?php

namespace SynerticPush;

/**
 * Class NotificationType
 * Type de campagne de message
 */
abstract class MessageType
{
    /**
     * Campagne de message de notification
     * A utiliser si l'objectif est uniquement d'alerter l'utilisateur par un push
     */
    const NOTIFICATION = "notif";

    /**
     * Campagne de message de données
     * A utiliser si l'objectif est uniquement d'envoyer un push silencieux avec des données personnalisés
     */
    const DATA = "data";

    /**
     * Campagne de message et de données
     * A utiliser si la campagne doit alerter l'utilisateur et fournir des informations personnalisés
     */
    const BOTH = "both";

}
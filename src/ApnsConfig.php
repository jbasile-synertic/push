<?php

namespace SynerticPush;

/**
 * Class ApnsConfig
 * Options spécifiques au service de notification push Apple.
 */
class ApnsConfig
{

    /**
     * @var ApnsMessagePriority Priorité d'envoi
     */
    private $priority = ApnsMessagePriority::HIGH;

    /**
     * @var int Combien de temps (en milisecondes) le message doit être conservé
     * dans le stockage FCM si le périphérique est hors ligne.
     * La durée maximale de vie prise en charge est de 4 semaines et la valeur par
     * défaut est de 4 semaines si elle n'est pas définie.
     * Réglez-le sur 0 si vous souhaitez envoyer le message immédiatement.
     */
    private $expiration = 259200000;

    /**
     * @var string Identifiant utilisé pour remplacer les notifications existantes dans le tiroir de notification.
     * S'il n'est pas spécifié, chaque demande crée une nouvelle notification.
     * Si spécifié et qu'une notification avec la même étiquette est déjà affichée,
     * la nouvelle notification remplace celle existante dans le tiroir de notification.
     */
    private $collapseId = null;

    private $badge = null;

    private $sound = null;

    private $title = null;

    private $subtitle = null;

    private $body = null;

    private $category = null;




}
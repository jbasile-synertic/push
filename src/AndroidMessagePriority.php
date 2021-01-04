<?php

namespace SynerticPush;

/**
 * Class AndroidMessagePriority
 * Priorité d'un message à envoyer aux appareils Android.
 * Notez que cette priorité est un concept FCM qui contrôle le moment où le message est remis.
 * Voir les guides FCM . En outre, vous pouvez déterminer la priorité d'affichage des notifications sur
 * les appareils Android ciblés à l'aide d' AndroidNotification.NotificationPriority .
 */
abstract class AndroidMessagePriority
{
    /**
     * 	Priorité par défaut pour les messages de données.
     * Les messages de priorité normale n'ouvriront pas les connexions réseau sur un
     * appareil en veille et leur livraison peut être retardée pour économiser la batterie.
     * Pour les messages moins urgents,
     * tels que les notifications de nouveaux e-mails ou d'autres données à synchroniser,
     * choisissez la priorité de livraison normale.
     */
    public const NORMAL = "normal";

    /**
     * Priorité par défaut pour les messages de notification.
     * FCM tente de délivrer immédiatement des messages de haute priorité,
     * permettant au service FCM de réveiller un appareil en veille lorsque cela
     * est possible et d'ouvrir une connexion réseau à votre serveur d'applications.
     * Les applications avec des alertes de messagerie instantanée,
     * de chat ou d'appel vocal,
     * par exemple, doivent généralement ouvrir une connexion réseau et s'assurer
     * que FCM envoie le message à l'appareil sans délai.
     * Définissez une priorité élevée si le message est urgent et nécessite une
     * interaction immédiate de l'utilisateur, mais sachez que définir
     * vos messages sur une priorité élevée contribue davantage à l'épuisement de la
     * batterie par rapport aux messages à priorité normale.
     */
    public const HIGH = "high";



}
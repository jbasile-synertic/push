<?php

namespace SynerticPush;

/**
 * Class AndroidConfig
 * Options spécifiques à Android pour les
 * messages envoyés via le serveur de connexion FCM.
 * @author jbasile@synertic.fr
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#androidconfig
 */
class AndroidConfig
{

    /**
     * @var string Un identifiant d'un groupe de messages qui peut être réduit,
     * de sorte que seul le dernier message soit envoyé lorsque la remise peut être reprise.
     * Un maximum de 4 clés de réduction différentes est autorisé à tout moment.
     */
    private $collapseKey = null;

    /**
     * @var AndroidMessagePriority Priorité de la livraison du message.
     */
    private $priority = AndroidMessagePriority::NORMAL;

    /**
     * @var int Combien de temps (en milisecondes) le message doit être conservé
     * dans le stockage FCM si le périphérique est hors ligne.
     * La durée maximale de vie prise en charge est de 4 semaines et la valeur par
     * défaut est de 4 semaines si elle n'est pas définie.
     * Réglez-le sur 0 si vous souhaitez envoyer le message immédiatement.
     */
    private $ttl = 259200000;

    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $restricted_package_name;

    /**
     * @var string JSON de donnée S'il est présent, il remplacera google.firebase.fcm.v1.Message.data.
     */
    private $data = null;

    /**
     * @var AndroidNotification Notification à envoyer aux appareils Android.
     */
    private $notification = null;

    /**
     * @var AndroidFcmOptions Options des fonctionnalités fournies par le SDK FCM pour Android.
     * TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $fcmOptions = null;

    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $directBootOk = null;


    public function __construct()
    {
        $this->notification = new AndroidNotification();
    }

    /**
     * *********************************************
     * *********************************************
     * GETTER ET SETTER
     * *********************************************
     * *********************************************
     */


    /**
     * @return string
     */
    public function getCollapseKey(): ?string
    {
        return $this->collapseKey;
    }

    /**
     * @param string $collapseKey
     */
    public function setCollapseKey(?string $collapseKey): void
    {
        $this->collapseKey = $collapseKey;
    }

    /**
     * @return AndroidMessagePriority
     */
    public function getPriority(): AndroidMessagePriority
    {
        return $this->priority;
    }

    /**
     * @param AndroidMessagePriority $priority
     */
    public function setPriority(AndroidMessagePriority $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return int
     */
    public function getTtl(): ?int
    {
        return $this->ttl;
    }

    /**
     * @param int $ttl
     */
    public function setTtl(?int $ttl): void
    {
        $this->ttl = $ttl;
    }

    /**
     * @return string
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(?string $data): void
    {
        $this->data = $data;
    }

    /**
     * @return AndroidNotification
     */
    public function getNotification(): ?AndroidNotification
    {
        return $this->notification;
    }

    /**
     * @param AndroidNotification $notification
     */
    public function setNotification(?AndroidNotification $notification): void
    {
        $this->notification = $notification;
    }


}
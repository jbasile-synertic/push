<?php

namespace SynerticPush;

/**
 * Class AndroidNotification Notification à envoyer aux appareils Android.
 * @author jbasile@synertic.fr
 */
class AndroidNotification
{

    /**
     * @var string Le titre de la notification.
     * S'il est présent, il remplacera google.firebase.fcm.v1.Notification.title.
     */
    private $title = null;

    /**
     * @var string Le corps du texte de la notification.
     * S'il est présent, il remplacera google.firebase.fcm.v1.Notification.body.
     */
    private $body = null;

    /**
     * @var string L'icône de la notification.
     * Définit l'icône de notification sur myicon pour la ressource dessinable myicon.
     * Si vous n'envoyez pas cette clé dans la demande,
     * FCM affiche l'icône du lanceur spécifié dans le manifeste de votre application.
     */
    private $icon = null;

    /**
     * @var string Couleur de l'icône de la notification, exprimée au format #rrggbb.
     */
    private $color = null;

    /**
     * @var string Le son à jouer lorsque l'appareil reçoit la notification.
     * Prend en charge "par défaut" ou le nom de fichier d'une ressource
     * audio intégrée dans l'application. Les fichiers audio doivent résider dans / res / raw /.
     */
    private $sound = null;

    /**
     * @var string Identifiant utilisé pour remplacer les notifications existantes dans le tiroir de notification.
     * S'il n'est pas spécifié, chaque demande crée une nouvelle notification.
     * Si spécifié et qu'une notification avec la même étiquette est déjà affichée,
     * la nouvelle notification remplace celle existante dans le tiroir de notification.
     */
    private $tag = null;

    /**
     * @var string L'action associée à un utilisateur clique sur la notification.
     * Si spécifié, une activité avec un filtre d'intention correspondant
     * est lancée lorsqu'un utilisateur clique sur la notification.
     */
    private $clickAction = null;

    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $bodyLocKey = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $bodyLocArgs = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $titleLocKey = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $titleLocArgs = null;

    /**
     * @var string L' identifiant de canal de la notification (nouveau dans Android O).
     * L'application doit créer une chaîne avec cet ID de chaîne avant de recevoir
     * une notification avec cet ID de chaîne. Si vous n'envoyez pas cet ID de
     * canal dans la demande ou si l'ID de canal fourni n'a pas encore été créé
     * par l'application, FCM utilise l'ID de canal spécifié dans le manifeste de l'application.
     */
    private $channelId = null;

    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $ticker = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $sticky = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $eventTime = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $localOnly = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $notificationPriority = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $defaultSound = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $defaultVibrateTimings = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $defaultLightSettings = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $vibrateTimings = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $visibility = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $notificationCount = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $lightSettings = null;
    /**
     * @var string TODO SYNERTIC : PAS ENCORE PRIS EN COMPTE
     */
    private $image = null;



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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon(?string $icon): void
    {
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getSound(): ?string
    {
        return $this->sound;
    }

    /**
     * @param string $sound
     */
    public function setSound(?string $sound): void
    {
        $this->sound = $sound;
    }

    /**
     * @return string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     */
    public function setTag(?string $tag): void
    {
        $this->tag = $tag;
    }

    /**
     * @return string
     */
    public function getClickAction(): ?string
    {
        return $this->clickAction;
    }

    /**
     * @param string $clickAction
     */
    public function setClickAction(?string $clickAction): void
    {
        $this->clickAction = $clickAction;
    }

    /**
     * @return string
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    /**
     * @param string $channelId
     */
    public function setChannelId(?string $channelId): void
    {
        $this->channelId = $channelId;
    }
}
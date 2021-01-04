<?php

namespace SynerticPush;

/**
 * Class Schedule Campagne push
 */
class Schedule
{

    /**
     * @var int Identifiant de la base de données cliente représentant la campagne de notification push.
     */
    private $clientScheduleId;

    /**
     * @var int Identifiant de la base de données serveur représentant l'application.
     */
    private $applicationId;

    /**
     * @var MessageType Type de campagne de message.
     */
    private $type;

    /**
     * @var string Nom de la campagne qui sera affiché pour l'utilisateur.
     */
    private $campaignName;

    /**
     * @var OSType Plateforme des terminaux ciblés.
     */
    private $target;

    /**
     * @var string Date et heure de l'envoi de la campagne au format MYSQL (YYYY-MM-DD HH:II:SS).
     */
    private $sendDatetime;

    /**
     * @var string Données silencieuses propre au projet au format JSON.
     */
    private $data;

    /**
     * @var array Tableau d'objet de type "Translate".
     * Permet de définir les textes du titre et du corps de la push en fonction des langues souhaitées.
     * @see Translate Objet de traduction
     */
    private $translateArray = [];

    /**
     * @var array Tableau d'objet de type "Device".
     * Permet de définir tous les devices qui recevront la notification push.
     * @see Device Objet représentant le terminal
     */
    private $devices = [];

    /**
     * @return int
     */
    public function getClientScheduleId(): int
    {
        return $this->clientScheduleId;
    }

    /**
     * @param int $clientScheduleId
     */
    public function setClientScheduleId(int $clientScheduleId): void
    {
        $this->clientScheduleId = $clientScheduleId;
    }

    /**
     * @return int
     */
    public function getApplicationId(): int
    {
        return $this->applicationId;
    }

    /**
     * @param int $applicationId
     */
    public function setApplicationId(int $applicationId): void
    {
        $this->applicationId = $applicationId;
    }

    /**
     * @return MessageType
     */
    public function getType(): MessageType
    {
        return $this->type;
    }

    /**
     * @param MessageType $type
     */
    public function setType(MessageType $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getCampaignName(): string
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     */
    public function setCampaignName(string $campaignName): void
    {
        $this->campaignName = $campaignName;
    }

    /**
     * @return OSType
     */
    public function getTarget(): OSType
    {
        return $this->target;
    }

    /**
     * @param OSType $target
     */
    public function setTarget(OSType $target): void
    {
        $this->target = $target;
    }

    /**
     * @return string
     */
    public function getSendDatetime(): string
    {
        return $this->sendDatetime;
    }

    /**
     * @param string $sendDatetime
     */
    public function setSendDatetime(string $sendDatetime): void
    {
        $this->sendDatetime = $sendDatetime;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getTranslateArray(): array
    {
        return $this->translateArray;
    }

    /**
     * @param array $translateArray
     */
    public function setTranslateArray(array $translateArray): void
    {
        $this->translateArray = $translateArray;
    }

    /**
     * @return array
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * @param array $devices
     */
    public function setDevices(array $devices): void
    {
        $this->devices = $devices;
    }




}
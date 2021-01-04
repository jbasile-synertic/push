<?php

namespace SynerticPush;

class Push
{

    private const BASE_URL_PRODUCTION = "https://push.app.synertic.fr/services/createSchedule";
    private const BASE_URL_DEVELOPMENT = "https://push.dev.synertic.fr/services/createSchedule";

    /**
     * @var Schedule tableau de campagne.
     */
    private $schedules = array();

    /**
     * @return array Retourne un tableau de campagne de push
     * @see Schedule
     */
    public function getSchedules(): array
    {
        return $this->schedules;
    }

    /**
     * @param array $schedules Modifie le tableau de campagne de push
     * @see Schedule
     */
    public function setSchedules(array $schedules): void
    {
        $this->schedules = $schedules;
    }

    public function send($prod = false){

        if($prod)
            return $this->curlPost(self::BASE_URL_PRODUCTION, json_encode($this->schedules));
        else
            return $this->curlPost(self::BASE_URL_DEVELOPMENT, json_encode($this->schedules));

    }

    /**
     * Cette fonction permet de réaliser une requête HTTP de type POST
     * @param String $url url l'url de destination
     * @param String $jsonData métadonnées
     * @author Basile Johan <jbasile.synertic@gmail.com>
     * @return String résultat en fonction de l'url appelée
     */
    private function curlPost($url, $jsonData)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)));

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

}
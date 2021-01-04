<?php


namespace SynerticPush;

/**
 * Class Translate Permet de définir les textes de la notification push
 * @author jbasile@synertic.fr
 */
class Translate
{

    /**
     * @var string code ISO du pays de traduction "fr" , "en" etc.. (doit être identique à la clé lang de l'objet "Device")
     * @see Device Objet qui utilise la même clé de lang
     */
    private $lang;

    /**
     * @var string Le titre de la notification.
     */
    private $title;

    /**
     * @var string Le corps de la notification.
     */
    private $body;


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
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }


}
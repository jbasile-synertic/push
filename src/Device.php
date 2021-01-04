<?php

namespace SynerticPush;


class Device
{

    /**
     * @var string token unique généré par le device qui permet de l'identifier lors de l'envoi du push
     */
    private $token;

    /**
     * @var string code ISO du pays de traduction "fr" , "en" etc.. (doit être identique à la clé lang de l'objet "Translate")
     * @see Translate Objet de traduction
     */
    private $lang;

    /**
     * @var OS plateforme du terminal en question
     */
    private $os;

    /**
     * @var string identifiant alphanumérique permettant d'identifier de manière unique le terminal
     * PS : Ne pas mettre l'identifiant séquentiel
     */
    private $deviceId;

}
<?php

namespace App\Domains\Contacts\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class ContactViewPresenter
 * @package  App\Domains\Contacts
 */
class ContactViewPresenter extends ViewPresenter
{

    public function getId()
    {
        return $this->id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function getPhone()
    {
        return $this->phone;
    }


    public function getCep()
    {
        return $this->cep;
    }


    public function getLogradouro()
    {
        return $this->logradouro;
    }


    public function getNumero()
    {
        return $this->numero;
    }


    public function getComplemento()
    {
        return $this->complemento;
    }


    public function getObservacao()
    {
        return $this->observacao;
    }


    public function getBairro()
    {
        return $this->bairro;
    }


    public function getMunicipio()
    {
        return $this->municipio;
    }


    public function getUf()
    {
        return $this->uf;
    }


    public function getIbge()
    {
        return $this->ibge;
    }


    public function getAcceptHtml()
    {
        return $this->accept_html ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }

    public function getAutoReply()
    {
        return $this->auto_reply ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }

    public function getSaveMessages()
    {
        return $this->save_messages ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }

    public function getRequireCaptcha()
    {
        return $this->require_captcha ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }

    public function getReplyMessageSite()
    {
        return $this->reply_message_site;
    }


    public function getReplyMessageEmail()
    {
        return $this->reply_message_email;
    }


    public function getIntro()
    {
        return $this->intro;
    }


    public function getBody()
    {
        return $this->body;
    }


    public function getLayout()
    {
        return $this->layout;
    }


    public function getActive()
    {
        return $this->active ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }
}
<?php

namespace App\Domains\Contacts\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class MessageViewPresenter
 * @package  App\Domains\Contacts
 */
class MessageViewPresenter extends ViewPresenter
{

    public function getId()
    {
        return $this->id;
    }


    public function getContactId()
    {
        return $this->contact_id;
    }


    public function getContactName()
    {
        return $this->contact_name;
    }


    public function getContactEmail()
    {
        return $this->contact_email;
    }


    public function getContactPhone()
    {
        return $this->contact_phone;
    }


    public function getSenderName()
    {
        return $this->sender_name;
    }


    public function getSenderEmail()
    {
        return $this->sender_email;
    }


    public function getSenderPhone()
    {
        return $this->sender_phone;
    }


    public function getSubject()
    {
        return $this->subject;
    }


    public function getMessage()
    {
        return $this->message;
    }

    public function getReceivedAt()
    {
        return $this->received_at ? $this->received_at->format('d/m/Y H:i:s') : null;
    }

    public function getReceivedAtDate()
    {
        return $this->received_at ? $this->received_at->format('d/m/Y') : null;
    }

    public function getReceivedAtTime()
    {
        return $this->received_at ? $this->received_at->format('H:i:s') : null;
    }

    public function getReceivedAtForHumans()
    {
        return $this->received_at ? $this->received_at->diffForHumans() : null;
    }

    public function getImportant()
    {
        return $this->important ? 'Sim' : 'Não';
    }


    public function getJunk()
    {
        return $this->junk ? 'Sim' : 'Não';
    }


    public function getRead()
    {
        return $this->read ? 'Sim' : 'Não';
    }

}
<?php

namespace App\Domains\Contacts;

use App\Domains\Contacts\Presenters\ContactViewPresenter;
use App\Domains\Contacts\Rules\ContactRules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $columnTitle       = 'name';
    protected $entityGender      = 'M';
    protected $entityIcon        = 'fa fa-fw fa-address-book';
    protected $entityRouteAlias  = 'contacts';
    protected $entityViewsAlias  = 'contacts';
    protected $entityRoutePrefix = 'contacts';
    protected $table             = 'contact_form';
    protected $rulesFrom         = ContactRules::class;
    protected $presenter         = ContactViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'documents',
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'observacao',
        'bairro',
        'municipio',
        'uf',
        'ibge',
        'accept_html',
        'auto_reply',
        'save_messages',
        'require_captcha',
        'reply_message_site',
        'reply_message_email',
        'intro',
        'body',
        'layout',
        'active',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class, 'contact_id', 'id');
    }
}

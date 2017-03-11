<?php

namespace App\Domains\Contacts;

use App\Domains\Contacts\Presenters\MessageViewPresenter;
use App\Domains\Contacts\Rules\MessageRules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $columnTitle           = 'subject';
    protected $entityDomainAlias     = 'contacts';
    protected $entityTranslationKey  = 'message';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-envelope';
    protected $entityRouteAlias      = 'contacts-messages';
    protected $entityViewsAlias      = 'contacts-messages';
    protected $entityRoutePrefix     = 'contacts-messages';
    protected $table                 = 'contact_form_message';
    protected $mediaCategorySlug     = 'contact_form_message';
    protected $rulesFrom             = MessageRules::class;
    protected $presenter             = MessageViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'documents',
    ];

    protected $dates = [
        'received_at',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'contact_id',
        'contact_name',
        'contact_email',
        'contact_phone',
        'sender_name',
        'sender_email',
        'sender_phone',
        'subject',
        'message',
        'received_at',
        'important',
        'junk',
        'read',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id', 'email');
    }
}

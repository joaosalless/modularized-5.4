<?php

namespace App\Domains\Persons;

use App\Support\Helpers\Utils\Mask;
use App\Support\Helpers\Utils\Utils;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Domains\Persons\Rules\PersonRules;

class Person extends Model
{
    use SoftDeletes;

    protected $entityDomainAlias    = 'persons';
    protected $entityTranslationKey = 'person';
    protected $entityGender         = 'M';
    protected $entityIcon           = 'fa fa-fw fa-bank';
    protected $table                = 'persons';
    protected $mediaCategorySlug    = 'persons';
    protected $entityRouteAlias     = 'persons';
    protected $entityViewsAlias     = 'persons';
    protected $entityRoutePrefix    = 'persons';
    protected $rulesFrom            = PersonRules::class;

    protected $entityAllowedMedias   = [
        'images',
        'videos',
        'audios',
        'documents',
    ];

    protected $fillable = [

    ];

    protected $dates = [
        'data_fundacao',
    ];

    public function setCnpjAttribute($value)
    {
        $this->attributes['cnpj'] = Utils::unmask($value);
    }

    public function getCnpjAttribute($value)
    {
        return Utils::mask($value, Mask::DOCUMENTO);
    }

    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = Utils::unmask($value);
    }

    public function getTelefoneAttribute($value)
    {
        return Utils::mask($value, Mask::TELEFONE);
    }

    public function setCelularAttribute($value)
    {
        $this->attributes['celular'] = Utils::unmask($value);
    }

    public function getCelularAttribute($value)
    {
        return Utils::mask($value, Mask::TELEFONE);
    }

    public function user()
    {
        return $this->morphTo('user');
    }
}
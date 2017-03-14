<?php

namespace App\Domains\Persons;

use App\Domains\Persons\Presenters\PersonViewPresenter;
use App\Support\Helpers\Utils\Mask;
use App\Support\Helpers\Utils\Utils;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Domains\Persons\Rules\PersonRules;

class Person extends Model
{
    use SoftDeletes;

    protected $columnTitle       = '';
    protected $entityGender      = 'M';
    protected $entityIcon        = 'fa fa-fw fa-bank';
    protected $entityRouteAlias  = 'persons';
    protected $entityViewsAlias  = 'persons';
    protected $entityRoutePrefix = 'persons';
    protected $table             = 'persons';
    protected $rulesFrom         = PersonRules::class;
    protected $presenter         = PersonViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'documents',
    ];

    protected $dates = [
        'data_nascimento',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'nome',
        'apelido',
        'cpf',
        'user_id',
        'user_type',
        'data_nascimento',
        'sexo',
        'telefone',
        'celular',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'municipio',
        'uf',
        'ibge',
        'site',
        'social',
    ];

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = Utils::unmask($value);
    }

    public function getCpfAttribute($value)
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
<?php

namespace App\Domains\Companies;

use App\Domains\Companies\Presenters\CompanyViewPresenter;
use App\Support\Helpers\Utils\Mask;
use App\Support\Helpers\Utils\Utils;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Domains\Companies\Rules\CompanyRules;

class Company extends Model
{
    use SoftDeletes;

    protected $entityDomainAlias    = 'companies';
    protected $entityTranslationKey = 'company';
    protected $entityGender         = 'M';
    protected $entityIcon           = 'fa fa-fw fa-bank';
    protected $table                = 'companies';
    protected $mediaCategorySlug    = 'companies';
    protected $entityRouteAlias     = 'companies';
    protected $entityViewsAlias     = 'companies';
    protected $entityRoutePrefix    = 'companies';
    protected $rulesFrom            = CompanyRules::class;
    protected $presenter            = CompanyViewPresenter::class;

    protected $entityAllowedMedias   = [
        'images',
        'documents',
    ];

    protected $dates = [
        'data_fundacao',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'user_id',
        'user_type',
        'data_fundacao',
        'inscricao_estadual',
        'telefone',
        'celular',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'observacao',
        'bairro',
        'municipio',
        'uf',
        'ibge',
        'site',
        'social',
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
        return $this->morphTo();
    }
}
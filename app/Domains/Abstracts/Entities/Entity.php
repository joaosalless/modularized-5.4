<?php

namespace App\Domains\Abstracts\Entities;

use App\Domains\Abstracts\Entities\Rules\EntityRules;
use App\Support\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class Entity extends Model
{
    use SoftDeletes;

    protected $columnTitle           = 'title';
    protected $entityDomainAlias     = 'abstracts_entity';
    protected $entityTranslationKey  = 'entity';
    protected $entityGender          = 'F';
    protected $entityIcon            = 'fa fa-fw fa-file-text';
    protected $entityRouteAlias      = 'abstract_entity';
    protected $entityViewsAlias      = 'abstract-entity';
    protected $entityRoutePrefix     = 'abstract-entity';
    protected $table                 = 'abstract_entity';
    protected $mediaCategorySlug     = 'abstract_entity';
    protected $rulesFrom             = EntityRules::class;

    protected $entityAllowedMedias   = [

    ];
}
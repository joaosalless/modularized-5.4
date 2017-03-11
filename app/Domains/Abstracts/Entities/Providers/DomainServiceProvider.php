<?php

namespace App\Domains\Abstracts\Entities\Providers;

use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'abstracts_entities';
    protected $hasTranslations = true;
}
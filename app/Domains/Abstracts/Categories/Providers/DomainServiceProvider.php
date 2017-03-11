<?php

namespace App\Domains\Abstracts\Categories\Providers;

use App\Support\Providers\AbstractServiceProvider;

class DomainServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias       = 'abstracts_categories';
    protected $hasTranslations = true;
}
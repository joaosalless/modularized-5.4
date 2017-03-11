<?php

namespace App\Domains\Companies\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class CompanyViewPresenter
 * @package  App\Domains\Companies
 */
class CompanyViewPresenter extends ViewPresenter
{
    public function id()
    {
        return $this->id;
    }

    public function razaoSocial()
    {
        return $this->razao_social;
    }

    public function nomeFantasia()
    {
        return $this->nome_fantasia;
    }

    public function cnpj()
    {
        return $this->cnpj;
    }

    public function userId()
    {
        return $this->user_id;
    }

    public function userType()
    {
        return $this->user_type;
    }

    public function dataFundacao()
    {
        return $this->data_fundacao;
    }

    public function inscricaoEstadual()
    {
        return $this->inscricao_estadual;
    }

    public function telefone()
    {
        return $this->telefone;
    }

    public function celular()
    {
        return $this->celular;
    }

    public function cep()
    {
        return $this->cep;
    }

    public function logradouro()
    {
        return $this->logradouro;
    }

    public function numero()
    {
        return $this->numero;
    }

    public function complemento()
    {
        return $this->complemento;
    }

    public function observacao()
    {
        return $this->observacao;
    }

    public function bairro()
    {
        return $this->bairro;
    }

    public function municipio()
    {
        return $this->municipio;
    }

    public function uf()
    {
        return $this->uf;
    }

    public function ibge()
    {
        return $this->ibge;
    }

    public function site()
    {
        return $this->site;
    }

    public function social()
    {
        return $this->social;
    }

}
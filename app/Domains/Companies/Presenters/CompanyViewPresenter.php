<?php

namespace App\Domains\Companies\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class CompanyViewPresenter
 * @package  App\Domains\Companies
 */
class CompanyViewPresenter extends ViewPresenter
{

    public function getId()
    {
        return $this->id;
    }


    public function getRazaoSocial()
    {
        return $this->razao_social;
    }


    public function getNomeFantasia()
    {
        return $this->nome_fantasia;
    }


    public function getCnpj()
    {
        return $this->cnpj;
    }


    public function getUserId()
    {
        return $this->user_id;
    }


    public function getUserType()
    {
        return $this->user_type;
    }

    public function getDataFundacao()
    {
        return $this->data_fundacao ? $this->data_fundacao->format('d/m/Y H:i:s') : null;
    }

    public function getDataFundacaoDate()
    {
        return $this->data_fundacao ? $this->data_fundacao->format('d/m/Y') : null;
    }

    public function getDataFundacaoTime()
    {
        return $this->data_fundacao ? $this->data_fundacao->format('H:i:s') : null;
    }

    public function getDataFundacaoForHumans()
    {
        return $this->data_fundacao ? $this->data_fundacao->diffForHumans() : null;
    }

    public function getInscricaoEstadual()
    {
        return $this->inscricao_estadual;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }


    public function getCelular()
    {
        return $this->celular;
    }


    public function getCep()
    {
        return $this->cep;
    }


    public function getLogradouro()
    {
        return $this->logradouro;
    }


    public function getNumero()
    {
        return $this->numero;
    }


    public function getComplemento()
    {
        return $this->complemento;
    }


    public function getBairro()
    {
        return $this->bairro;
    }


    public function getMunicipio()
    {
        return $this->municipio;
    }


    public function getUf()
    {
        return $this->uf;
    }


    public function getIbge()
    {
        return $this->ibge;
    }


    public function getSite()
    {
        return $this->site;
    }


    public function getSocial()
    {
        return $this->social;
    }

}
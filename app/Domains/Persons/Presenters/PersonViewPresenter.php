<?php

namespace App\Domains\Persons\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class PersonViewPresenter
 * @package  App\Domains\Persons
 */
class PersonViewPresenter extends ViewPresenter
{

    public function getId()
    {
        return $this->id;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function getApelido()
    {
        return $this->apelido;
    }


    public function getCpf()
    {
        return $this->cpf;
    }


    public function getUserId()
    {
        return $this->user_id;
    }


    public function getUserType()
    {
        return $this->user_type;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento ? $this->data_nascimento->format('d/m/Y H:i:s') : null;
    }

    public function getDataNascimentoDate()
    {
        return $this->data_nascimento ? $this->data_nascimento->format('d/m/Y') : null;
    }

    public function getDataNascimentoTime()
    {
        return $this->data_nascimento ? $this->data_nascimento->format('H:i:s') : null;
    }

    public function getDataNascimentoForHumans()
    {
        return $this->data_nascimento ? $this->data_nascimento->diffForHumans() : null;
    }

    public function getSexo()
    {
        return $this->sexo ? ($this->sexo == 'M' ? $this->entity->getLabel('male') : $this->entity->getLabel('male')) : null;
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
<?php

namespace App\Support\Html\Bootstrap\Providers;

use App\Support\Providers\AbstractServiceProvider;
use Form;

class FormServiceProvider extends AbstractServiceProvider
{
    protected $unitAlias = 'bs';

    public function boot()
    {
        $this->registerComponents();
        $this->registerMacros();
    }

    public function registerComponents()
    {
        Form::component('bsLabel', $this->view('components.form.label'), ['name', 'label', 'attributes' => []]);
        Form::component('bsText', $this->view('components.form.text'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsTextarea', $this->view('components.form.textarea'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsCep', $this->view('components.form.cep'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsCpf', $this->view('components.form.cpf'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsCnpj', $this->view('components.form.cnpj'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsPhone', $this->view('components.form.phone'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsDate', $this->view('components.form.date'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsTime', $this->view('components.form.time'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsStatic', $this->view('components.form.static'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsEmail', $this->view('components.form.email'), ['name', 'label', 'value', 'attributes' => []]);
        Form::component('bsPassword', $this->view('components.form.password'), ['name', 'label', 'attributes' => []]);
        Form::component('bsBtnSubmit', $this->view('components.form.submit'), ['name', 'label', 'attributes' => []]);
        Form::component('bsFile', $this->view('components.form.file'), ['name', 'label', 'attributes' => []]);

        /* Select */
        Form::component('bsSelect', $this->view('components.form.select'), ['name', 'label', 'list' => [], 'value', 'attributes' => []]);
        Form::component('bsSelectUf', $this->view('components.form.select_uf'), ['name', 'label', 'value', 'attributes' => []]);

        /* Checkbox */
        Form::component('bsCheckbox', $this->view('components.form.checkbox'), ['name', 'label', 'value', 'checked', 'attributes' => [], 'links' => []]);
        Form::component('bsToggle', $this->view('components.form.toggle'), ['name', 'label', 'value' => [], 'checked', 'attributes' => []]);
        Form::component('bsCheckboxTermos', $this->view('components.form.checkbox_termos'), ['name', 'label', 'value', 'checked', 'attributes' => [], 'links' => []]);

        /* Grupos de campos */
        Form::component('bsEndereco', $this->view('components.form.endereco'), ['nameArray' => null, 'attributes' => []]);
    }

    public function registerMacros()
    {
        Form::macro('selectUf', function ($name, $value = null, $params = []) {
            $ufs = [
                "AC" => "Acre",
                "AL" => "Alagoas",
                "AM" => "Amazonas",
                "AP" => "Amapá",
                "BA" => "Bahia",
                "CE" => "Ceará",
                "DF" => "Distrito Federal",
                "ES" => "Espírito Santo",
                "GO" => "Goiás",
                "MA" => "Maranhão",
                "MG" => "Minas Gerais",
                "MS" => "Mato Grosso do Sul",
                "MT" => "Mato Grosso",
                "PA" => "Pará",
                "PB" => "Paraíba",
                "PE" => "Pernambuco",
                "PI" => "Piauí",
                "PR" => "Paraná",
                "RJ" => "Rio de Janeiro",
                "RN" => "Rio Grande do Norte",
                "RO" => "Rondônia",
                "RR" => "Roraima",
                "RS" => "Rio Grande do Sul",
                "SC" => "Santa Catarina",
                "SE" => "Sergipe",
                "SP" => "São Paulo",
                "TO" => "Tocantins",
            ];

            return Form::select($name, $ufs, $value, $params);
        });
    }
}

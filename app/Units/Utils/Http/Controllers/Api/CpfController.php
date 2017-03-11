<?php

namespace App\Units\Utils\Http\Controllers\Api;

use App\Support\Helpers\Utils\Utils;
use Illuminate\Http\Request;

class CpfController extends Controller
{
    public function validateCpf(Request $request, $cnpj)
    {
        if (Utils::isCpf($cnpj)) {

            $response = [
                'success' => true,
            ];

            return response()->json($response);

        } else {
            $response = [
                'error' => true,
            ];
            return response()->json($response);
        }
    }
}
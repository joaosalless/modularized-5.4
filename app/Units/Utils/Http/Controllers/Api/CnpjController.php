<?php

namespace App\Units\Utils\Http\Controllers\Api;

use App\Support\Helpers\Utils\Utils;
use Illuminate\Http\Request;

class CnpjController extends Controller
{
    public function validateCnpj(Request $request, $cnpj)
    {
        if (Utils::isCnpj($cnpj)) {

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
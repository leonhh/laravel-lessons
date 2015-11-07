<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $method = $request->input('calc_method');

        switch ($method) {
            case 'plus':
                $result = $num1 + $num2;
                break;
            case 'minus':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = $num1 / $num2;
                break;
        }

        return view('result', ['result' => $result]);
    }
}

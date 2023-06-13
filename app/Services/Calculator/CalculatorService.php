<?php

namespace App\Services\Calculator;

use App\Http\Requests\CalculatorRequest;
use App\Contracts\Services\Calculator\CalculatorServiceInterface;

class CalculatorService implements CalculatorServiceInterface
{
    /**
     * Add two numbers from user
     *
     * @param CalculatorRequest $request
     * @return integer sum
     */
    public function add(CalculatorRequest $request)
    {
        return ($request->first_num + $request->sec_num);
    }

    /**
     * Multiply two numbers from user
     *
     * @param CalculatorRequest $request
     * @return integer result
     */
    public function multiply(CalculatorRequest $request)
    {
        return ($request->first_num * $request->sec_num);
    }

    /**
     * Divide two numbers from user
     *
     * @param CalculatorRequest $request
     * @return integer result
     */
    public function divide(CalculatorRequest $request)
    {
        return ($request->first_num / $request->sec_num);
    }
}

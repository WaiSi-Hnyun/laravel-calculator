<?php

namespace App\Contracts\Services\Calculator;

use App\Http\Requests\CalculatorRequest;

/**
 * Interface for calculator service
 */
interface CalculatorServiceInterface
{
    /**
     * Add two numbers from user
     *
     * @param CalculatorRequest $request
     */
    public function add(CalculatorRequest $request);

    /**
     * Multiply two numbers from user
     *
     * @param CalculatorRequest $request
     */
    public function multiply(CalculatorRequest $request);

    /**
     * Divide two numbers from user
     *
     * @param CalculatorRequest $request
     */
    public function divide(CalculatorRequest $request);
}

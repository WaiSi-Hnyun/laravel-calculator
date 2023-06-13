<?php

namespace App\Http\Controllers\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CalculatorRequest;
use App\Contracts\Services\Calculator\CalculatorServiceInterface;

class CalculatorController extends Controller
{
    /**
     * calculator interface
     */
    private $calculatorInterface;

    /**
     * Create a constructor for calculator controller
     */
    public function __construct(CalculatorServiceInterface $calculatorServiceInterface)
    {
        $this->calculatorInterface = $calculatorServiceInterface;
    }

    /**
     * To show calculator ui
     *
     * @return View home page
     */
    public function index()
    {
        return view('calculator.index');
    }

    /**
     * To add two numbers provided by user
     *
     * @param CalculatorRequest $request
     * @return View home page
     */
    public function add(CalculatorRequest $request)
    {
        $request->flash();
        $result = $this->calculatorInterface->add($request);

        return redirect()->route('calculator.index')->with('result', $result);
    }

    /**
     * To multiply two numbers provided by user
     *
     * @param CalculatorRequest $request
     * @return View home page
     */
    public function multiply(CalculatorRequest $request)
    {
        $request->flash();
        $result = $this->calculatorInterface->multiply($request);

        return redirect()->route('calculator.index')->with('result', $result);
    }

    /**
     * To divide two numbers provided by user
     *
     * @param CalculatorRequest $request
     * @return View home page
     */
    public function divide(CalculatorRequest $request)
    {
        $request->flash();
        $result = $this->calculatorInterface->divide($request);

        return redirect()->route('calculator.index')->with('result', $result);
    }
}

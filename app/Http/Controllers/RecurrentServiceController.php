<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecurrentServiceRequest;
use App\RecurrentService;
use Illuminate\Http\Request;

class RecurrentServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $recurrentServices = RecurrentService::mine()->get();

        if ($request->isXmlHttpRequest()) {
            return response()->json([
                'recurrentServices' => $recurrentServices
            ], 200);
        }

        return view('recurrent-services.index', [
            'recurrentServices' => $recurrentServices
        ]);
    }

    public function create()
    {
        return view('recurrent-services.create', [
            'recurrentService' => new RecurrentService()
        ]);
    }

    public function store(RecurrentServiceRequest $request)
    {
        $data = $request->validated();
        $data = array_merge($data, ['user_id' => auth()->user()->id]);
        RecurrentService::create($data);

        return redirect()->route('recurrent-services.index');
    }

    public function show(RecurrentService $recurrentService)
    {
        return view('recurrent-services.show', [
            'recurrentService' => $recurrentService
        ]);
    }

    public function edit(RecurrentService $recurrentService)
    {
        return view('recurrent-services.edit', [
            'recurrentService' => $recurrentService
        ]);
    }

    public function update(RecurrentServiceRequest $request, RecurrentService $recurrentService)
    {
        $recurrentService->update($request->validated());

        return redirect()->route('recurrent-services.show', ['recurrent_service' => $recurrentService]);
    }

    // for delete you must check if is not assigned to contacts or companies
}

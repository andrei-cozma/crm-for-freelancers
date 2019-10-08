<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::mine()->get();

        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        $company = new Company();

        return view('companies.create', compact('company'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'unique_registration_code' => '',
            'trade_register_number' => '',
            'city' => '',
            'address' => '',
            'hourly_rate' => '',
        ]);

        $data = array_merge($data, ['user_id' => auth()->user()->id]);

        Company::create($data);

        return redirect('companies');
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $data = $request->validate([
            'name' => 'required',
            'unique_registration_code' => '',
            'trade_register_number' => '',
            'city' => '',
            'address' => '',
            'hourly_rate' => '',
        ]);

        $company->update($data);

        return redirect('companies');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('companies');
    }
}

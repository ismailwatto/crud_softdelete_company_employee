<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Models\Company; // Assuming you have a Company model
class CompanyController extends Controller
{
    
    public function companydata()
    {
        return view('pages.company.create');
    }

    public function storee(CompanyRequest $request)
    {
        // p($request->all());
        // die;
        $company = Company::create(['name' => $request->name, 'address' => $request->address,'abc' => '12345']);
        // You can choose to return a view or redirect to another route
        return view('pages.company.show', compact('company'));
        // or
        // return redirect()->route('pages.company.show', ['id' => $company->id]);
    }
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        
        if ($search != "") {
            $companies = Company::where('name', 'like', "$search%")->paginate(15);
        } else {
            $companies = Company::select('id', 'name', 'address', 'created_at')->paginate(15);
        }
        
        return view('pages.company.index', compact('companies', 'search'));
    }

       /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     // $query = 'SELECT * FROM companies WHERE id = '. $id;
    //     // $company = DB::select($query);

    //     $company = Company::find($id);
    //     $company = Company::where('id', $id)->first();
    //     dd($company);
    //     return view('pages.company.show');
    // }
    public function show(Company $company)
    {
        // $query = 'SELECT * FROM companies WHERE id = '. $id;
        // $company = DB::select($query);
        $company = $company->first();
        return view('pages.company.show', compact('company'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $company = Company::find($id);
        return view('pages.company.update', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {

    $company = Company::find($request->id);
    $company->name = $request->name;
    $company->address = $request->address;


    $company->update();

    return redirect()->route('pages.company.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function trash(){
        $companies=Company::onlyTrashed()->get();
        $data=compact('companies');
        return view('pages.company.trash')->with($data);
    }
    public function restore(string $id)
    {
        $company = Company::withTrashed()->where('id', $id)->first();
        
        if (!is_null($company)) {
            $company->restore();
        }
        
        return redirect('companydata');
    }
    public function delete(string $id)
    {
        $company = Company::withTrashed()->where('id', $id)->first();
        
        if (!is_null($company)) {
            $company->forceDelete();
        }
        
        return redirect()->back();
    }
    
    
    public function destroy(string $id)
    {
        Company::where('id', $id)->delete();
        return redirect('companydata');
        //
    }
}

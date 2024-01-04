<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CustomerResource;
use App\Http\Resources\v1\CustomerCollection;
use Illuminate\Http\Request;
use App\Filters\v1\CustomerFilter;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * filtering form: column[operator]=value
     */
    public function index(Request $request)
    {
        $filter = new CustomerFilter();
        $filterItems = $filter->transform($request); // [[col, op, value]]

        $includeInvoices = $request->query("includeInvoices");

        $customers = Customer::where($filterItems);

        if ($includeInvoices === "true") {
            $customers = $customers->with('invoices');
        }

        return new CustomerCollection($customers->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Customer $customer)
    {
        // return $customer;

        $includeInvoices = $request->query("includeInvoices");

        if ($includeInvoices === "true") {
            return new CustomerResource($customer->loadMissing('invoices'));
        }

        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}

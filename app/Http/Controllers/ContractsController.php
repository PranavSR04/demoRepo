<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use Illuminate\Http\Request;


class ContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        Contracts::create([

            'contractId'=>$request->contractId,
            'msaId'=>$request->msaId,
            'added_by'=>$request->added_by,
            'contractType'=>$request->contractType,
            'dateOfSignature'=>$request->dateOfSignature,
            'remarks'=>$request->remarks,
            'startDate'=>$request->startDate,
            'endDate'=>$request->endDate,
            'estimated_amount'=>$request->estimated_amount,
            'doc_link'=>$request->doc_link,
            'projectTerm'=>$request->projectTerm,
            'is_active'=>$request->is_active

            ]);

            return "Contract added successfully";
    }

    public function getUsers(Request $request){

        $user_list=Contracts::join('users','users.id','=','contracts.added_by');

        return response()->json($user_list->get(['username','role_id','contractId','contractType',]));
                        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contracts $contracts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contracts $contracts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contracts $contracts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contracts $contracts)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ExperionTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperionTablesController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email_id"=> "required|email",
            "password"=> "required|min:6|max:30|string",
            "first_name"=>"required|string|min:3|max:20",
            "middle_name"=>"string|max:20",
            "last_name"=>"string|max:20",
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        ExperionTables::create([
            "email_id"=> $request->get("email_id"),
            "password"=> $request->get("password"),
            "first_name"=> $request->get("first_name"),
            "middle_name"=> $request->get("middle_name"),
            "last_name"=> $request->get("last_name"),
        ]);

        return "Data inserted successfully for Experion table";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function generateRandomData()
    {
        $dataArray = [
            [
                "email_id" => "sample1@example.com",
                "password" => bcrypt("password1"),
                "first_name" => "John",
                "middle_name" => "Doe",
                "last_name" => "Smith",
            ],
            [
                "email_id" => "sample2@example.com",
                "password" => bcrypt("password2"),
                "first_name" => "Jane",
                "middle_name" => "Alice",
                "last_name" => "Johnson",
            ],
            [
                "email_id" => "sample3@example.com",
                "password" => bcrypt("password3"),
                "first_name" => "Michael",
                "middle_name" => "David",
                "last_name" => "Brown",
            ],
            [
                "email_id" => "sample4@example.com",
                "password" => bcrypt("password4"),
                "first_name" => "Emily",
                "middle_name" => "Grace",
                "last_name" => "Taylor",
            ],
            [
                "email_id" => "sample5@example.com",
                "password" => bcrypt("password5"),
                "first_name" => "William",
                "middle_name" => "Robert",
                "last_name" => "Jones",
            ],
            [
                "email_id" => "sample6@example.com",
                "password" => bcrypt("password6"),
                "first_name" => "Olivia",
                "middle_name" => "Mae",
                "last_name" => "Anderson",
            ],
            [
                "email_id" => "sample7@example.com",
                "password" => bcrypt("password7"),
                "first_name" => "Ethan",
                "middle_name" => "Daniel",
                "last_name" => "Miller",
            ],
        ];
        foreach ($dataArray as $data) {
            ExperionTables::create($data);
        }        

        return "Data inserted successfully for Experion table";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = ExperionTables::where('id', $id)->get();
        
        return response()->json([$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarFormRequest;


class GuitarsController extends Controller
{

    // Sample Static Data 
    private static function getData() {

        // Display the static data.
        return [
            ['id' => 1, 'name' => 'American Standard Strat', 'brand' => 'Fender' ],
            ['id' => 2, 'name' => 'Starla S2', 'brand' => 'PRS' ],
            ['id' => 3, 'name' => 'Explorer', 'brand' => 'Gibson' ],
            ['id' => 4, 'name' => 'Talman', 'brand' => 'Ibanez' ],
        ]; 
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Showing all the particular resource.
        // GET 

        return view('guitars.index', [
            'guitars' => Guitar::all(),
            'userInput' => '<script>alert("Hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET 
        return view('guitars.create');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuitarFormRequest $request)
    {

        // Validating Data
        $data = $request->validated();


        Guitar::create($data);

        
        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource or data.  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        // GET
        // Using Model Guitar as Type Hint 
        return view('guitars.show', [
            'guitar' => $guitar 
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        // GET 
        return view('guitars.edit', [
            'guitar' => $guitar 
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuitarFormRequest $request, Guitar $guitar)
    {
        
        // Validating Data
        $data = $request->validated();


        $guitar->update($data);


        return redirect()->route('guitars.show', $guitar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE
    }
}

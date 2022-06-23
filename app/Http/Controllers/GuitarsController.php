<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;

class GuitarsController extends Controller
{

    // Sample Data in Array or showing a number of data in a data set.
    private static function getData() {

        // Display the list if there is a list

        // return [

        // ];

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
    public function store(Request $request)
    {

        // Validating Data
        $request->validate([
            'guitar-name' => 'required',
            'brand' => 'required',
            'year' => ['required', 'integer'],
        ]);

        // POST
        $guitar = new Guitar();

        $guitar->name = strip_tags($request->input('guitar-name'));
        $guitar->brand = strip_tags($request->input('brand'));
        $guitar->year_made = strip_tags($request->input('year'));

        $guitar->save();

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource or data.  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($guitar)
    {
        // GET 
        $guitars = self::getData();

        $index = array_search($guitar, array_column($guitars, 'id'));

        if($index === false) {
            abort(404);
        }
        return view('guitars.show', [
            'guitar' => $guitars[$index]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // POST 
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

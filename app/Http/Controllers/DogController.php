<?php

namespace App\Http\Controllers;

use App\Dog;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dog::all();

        return $dogs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'breed' => 'required',
            'size' => 'required',
            'weight' => 'required|numeric',
            'color' => 'required',
            'hair' => 'required',
            'age' => 'required|numeric',
            'photo' => 'required|image'
        ]);

        try {
            $dog = Dog::create([
                'name' => $request->input('name'),
                'breed' => $request->input('breed'),
                'size' => $request->input('size'),
                'weight' => $request->input('weight'),
                'color' => $request->input('color'),
                'hair' => $request->input('hair'),
                'age' => $request->input('age'),
            ]);

            $request->file('photo')->storeAs(
                'dogs',
                $dog->id . '.jpg',
                'public'
            );
        } catch (QueryException $e) {
            return $e;
        }
        return "sucess";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dog = Dog::findOrFail($id);
        return $dog;
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
        $this->validate($request, [
            'name' => 'required',
            'breed' => 'required',
            'size' => 'required',
            'weight' => 'required|numeric',
            'color' => 'required',
            'hair' => 'required',
            'age' => 'required|numeric',
        ]);

        $dog = Dog::findOrFail($id);
        try {
            $dog->update([
                'name' => $request->input('name'),
                'breed' => $request->input('breed'),
                'size' => $request->input('size'),
                'weight' => $request->input('weight'),
                'color' => $request->input('color'),
                'hair' => $request->input('hair'),
                'age' => $request->input('age'),
            ]);
            $photo = $request->file('photo');
            if ($photo != null) {
                $request->file('photo')->storeAs(
                    'dogs',
                    $dog->id . '.jpg',
                    'public'
                );
            }
        } catch (QueryException $e) {
            return $e;
        }
        return "success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dog::find($id)->delete();
    }
}

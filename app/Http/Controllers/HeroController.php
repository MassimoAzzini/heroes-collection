<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Hero::paginate(10);
        return view('heroes.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $new_hero = new Hero();

        $form_data['slug'] = Hero::generateSlug($form_data['name']);
        $new_hero->fill($form_data);
        $new_hero->save();

        return redirect()->route('heroes.show', $new_hero);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('heroes.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('heroes.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $form_data = $request->all();
        if ($hero['name'] == $form_data['name']) {
            $form_data['slug'] = $hero['slug'];
        } else {
            $form_data['slug'] = Hero::generateSlug($form_data['name']);
        }

        $hero->update($form_data);
        return redirect()->route('heroes.show', $hero);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();

        return redirect()->route('heroes.index');
    }
}

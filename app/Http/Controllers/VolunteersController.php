<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\VolunteerRequest;

use App\Volunteer; // temos que definir o caminho

class VolunteersController extends Controller
{

    public function index()
    {
        $volunteers =  Volunteer::all();
        //compact -> esta enviado em forma de array
        return view('volunteers.index', compact('volunteers'));
    }

    public function create()
    {
        return view('volunteers.create');
    }

    public function store(VolunteerRequest $request) //recebendo um REQUEST do tipo Volunter ele ja vem validado
    {
        //$this->validate($request,Volunteer::$rules); forma de validar
        Volunteer::create($request->all());
        $volunteers =  Volunteer::all();
        return view('volunteers.index', compact('volunteers'));
    }

    public function show($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteers.show', compact('volunteer'));
    }

    public function edit($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteers.edit', compact('volunteer'));
    }


    public function update(VolunteerRequest $request, $id) //recebendo um REQUEST do tipo Volunter ele ja vem validado
    {
        //$this->validate($request,Volunteer::$rules); forma de validar
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->update($request->all());
        return redirect()->route('volunteer.index');
    }

    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return redirect()->route('volunteer.index');
    }
}

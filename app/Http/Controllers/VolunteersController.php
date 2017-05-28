<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\VolunteerRequest;

use App\Volunteer; // temos que definir o caminho

class VolunteersController extends Controller
{

    public function index() {
        $volunteers =  Volunteer::simplePaginate(15);
       // $volunteers =  Volunteer::paginate(15);
        //compact -> esta enviado em forma de array
        return view('volunteers.index', compact('volunteers'));
    }

    public function create() {
        return view('volunteers.create');
    }

    public function store(VolunteerRequest $request) { //recebendo um REQUEST do tipo Volunter ele ja vem validado
        //$this->validate($request,Volunteer::$rules); forma de validar
        Volunteer::create($request->all());
        $volunteers =  Volunteer::simplePaginate(15);
        return view('volunteers.index', compact('volunteers'));
    }

    /*
    **    Para a utilização desta forma do metodo Store, é necessario uma configuração 
    **    no arquivo RouteServiceProvider que fica no App -> Providers
    */
    public function show(Volunteer $volunteer) {
        return view('volunteers.show', compact('volunteer'));
    }

    public function edit(Volunteer $volunteer) {
        return view('volunteers.edit', compact('volunteer'));
    }


    public function update(VolunteerRequest $request, Volunteer $volunteer) { //recebendo um REQUEST do tipo Volunter ele ja vem validado
        //$this->validate($request,Volunteer::$rules); forma de validar
        $volunteer->update($request->all());
        return redirect()->route('volunteer.index');
    }

    public function destroy(Volunteer $volunteer) {
        $volunteer->delete();
        return redirect()->route('volunteer.index');
    }
}

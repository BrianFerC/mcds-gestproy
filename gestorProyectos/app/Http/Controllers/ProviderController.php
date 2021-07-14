<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderRequest;
use PDF;
use App\Exports\UserExport;
use App\Imports\UserImport;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prov = Provider::paginate(20);
        return view('providers.index')->with('prov', $prov);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderRequest $request)
    {

        //dd($request->all());
        $provider = new Provider;
        $provider->name_provider = $request->name_provider;
        $provider->name_contact  = $request->name_contact;
        if ($request->hasFile('image_provider')) {
            $file = time() . '.' . $request->image_provider->extension();
            $request->image_provider->move(public_path('imgs/imgProviders/'), $file);
            $provider->image_provider = 'imgs/imgProviders/' . $file;
        }

        if ($provider->save()) {
            echo "segita";
            return redirect('providers')->with('message', 'The Provider: ' . $provider->name_provider . ' was successfully added');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $prov)
    {
        return view('providers.show')->with('prov', $prov);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $prov)
    {
        return view('providers.edit')->with('prov', $prov);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderRequest $request, Provider $prov)
    {
        $prov->name_provider = $request->name_provider;
        $prov->name_contact = $request->name_contact;
        if ($request->hasFile('image_provider')) {
            $file = time() . '.' . $request->image_provider->extension();
            $request->image_provider->move(public_path('imgs/imgProviders'), $file);
            $provider->image_provider = 'imgs/imgProviders' . $file;
        }
        if ($prov->save()) {
            return redirect('providers')->with('message', 'The Provider: ' . $prov->name_provider . ' was successfully edited');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $prov)
    {
        if ($provider->delete()) {
            return redirect('providers')->with('message', 'The Provider: ' . $project->name_provider . ' was successfully deleted');
        }
    }
    public function search(Request $request) {
        $provs = Provider::name_povider($request->q)->orderBy('id', 'DESC')->paginate(20);
        return view('providers.search')->with('prov', $provs);
    } 
    public function pdf() {
        $provides = Provider::all();
        $pdf = PDF::loadView('providers.pdf', compact('providers'));
        return $pdf->download('allproviders.pdf');
    }

    public function excel() {
        return \Excel::download(new ProviderExport, 'allproviders.xlsx');
    }

    public function import(Request $request) {
        $file = $request->file('file');
        \Excel::import(new ProviderImport, $file);
        return redirect()->back()->with('message', 'Provedores importados con exito!');
    }

}

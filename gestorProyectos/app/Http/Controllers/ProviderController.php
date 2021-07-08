<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderRequest;




class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::paginate(50);
        return view('providers.index')->with('prov', $providers);
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
        $provider = new Provider;
        $provider->name_provider = $request->name_provider;
        $provider->name_contact  = $request->name_contact;
        $provider->image_provider= $request->image_provider;
        if ($provider->save()) {
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
        $prov = Category::all();
        $tracing = Tracing::all();
        return view('providers.edit')->with('prov', $prov);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderRequestRequest $request, Provider $prov)
    {
        $prov->name_provider = $request->name_provider;
        $prov->name_contact = $request->name_contact;
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
        $provs = Provider::names($request->q)->orderBy('id', 'DESC')->paginate(20);
        return view('providers.search')->with('prov', $projects);
    }
}

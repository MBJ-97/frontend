@extends('layouts.business')

@section('content')


<div class="container mx-auto mt-16 font-jost">

    <div class="w-full lg:w-1/2 p-8 mx-auto">
        <h1 class="text-3xl text-wblack text-center">Connexion Admin</h1>

        <form method="POST" action="/login/businessuser" >
            @csrf
            <div class="flex flex-col mb-4">
                <label class="color-grey">Email</label>
                <input name="email" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="email">
            </div>
            <div class="flex flex-col mb-4">
                <label class="color-grey">Mot de passe</label>
                <input name="password" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="password">
                <a href="" class="text-right mt-3" href=""><span class="underline text-grey" > Mot de passe oublié ?</span></a>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between mt-16 text-center">
                <input class="sm:order-2 bg-blue rounded-md px-8 py-3 text-white cursor-pointer" type="submit" value="Connexion">
                <a href="" class="underline sm:order-1 mt-4 sm:mt-0" href="">Pas encore inscrit ?</a>
            </div>

        </form>
    </div>
</div>  

  @endsection
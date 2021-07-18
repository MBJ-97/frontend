@extends('layouts.business')

@section('content')

    <div id="app" class="container mx-auto mt-0 md:mt-20">
        <div class="parent flex flex-wrap font-jost text-wblack">
            <div class="child1 w-full md:w-1/3 py-8">
                <img class="w-1/2 md:w-11/12 mx-auto" src="{{asset('images/assets/main/onemorestep.png') }}" alt="One more step" width="90%">
            </div>

            <div class="child2 w-full md:w-2/3 py-8 px-4">
                <h3 class="text-3xl text-left mb-4">On est à une étape de la fin !</h3>
                <p class="mb-16">Entrez vos identifiants qui vous permetterons de vous connecter plus tard à votre espace admin.</p>
                <form action="/processsignup" method="POST">
                    @csrf
                    <div class="flex flex-wrap px-6">
                        <div class="w-full mb-10 md:w-1/2 md:pr-4 flex flex-col">
                            <label class="mb-4">Email</label>
                            <span class="text-red text-md"> @error('email') {{$message}} @enderror </span>
                            <input name="email" required placeholder="Votre email" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="email">
                        </div>
                        <div class="w-full mb-10 md:w-1/2 flex flex-col">
                            <label class="mb-4">Mot de passe</label>
                            <span class="text-red text-md"> @error('password') {{$message}} @enderror </span>
                            <input name="password" required placeholder="Tapez votre mot de passe" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="password">
                        </div>
                    </div>

                    <input class="bg-blue rounded-md px-20 py-4 text-white text-xl block mx-auto my-10 cursor-pointer float-center" value="Finaliser" type="submit">

                </form>
            </div>
        </div>
    </div>

@endsection
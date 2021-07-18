@extends('layouts.business')

@section('content')

<div id="app" class="container mx-auto mt-0 md:mt-20">
    <div class="parent flex flex-wrap font-rubik text-wblack">
        <div class="child1 w-full md:w-1/3 py-8">
            <img class="w-9/12 md:w-11/12 mx-auto" src=" {{asset('images/assets/main/success.png')}} " alt="step one completed">
        </div>

        <div class="child2 w-full md:w-2/3 py-8 px-0 md:px-4 my-auto">
            <h3 class="text-3xl text-left mb-4 text-center md:text-left"> Welcome to the crew </h3>
            <p class="mb-16">Bravo votre compte à été crée avec succes, pour vous connecter à votre espace admin, 
                <span class="underline"> <a href="">cliquez ici </a></span> !
            </p>
        </div>
    </div>
</div>

</div>

@endsection
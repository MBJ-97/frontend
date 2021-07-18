@extends('layouts.business')

@section('content')

    <div id="app" class="container mx-auto mt-0 md:mt-20 font-jost text-wblack p-6">

        <h1 class="text-5xl font-semibold mb-20">Dashboard</h1>

        <div class="note flex flex-wrap justify-between mx-6 mb-20 p-4 md:p-8">
            <div class="w-full md:w-1/3 mb-6 md:mb-0 note shadow-shadd p-8 rounded mx-auto">
                <h3 class="text-xl mb-6">Note moyenne</h3>
                <p class="text-7xl text-center">4,3<span class="text-2xl">/5</span> </p>
            </div>
            <div class="w-full md:w-1/3 mb-6 md:mb-0 rvwrs shadow-shadd p-8 rounded mx-auto">
                <h3 class="text-xl mb-6">Nombre de reviews</h3>
                <p class="text-7xl text-center">411</p>
            </div>
        </div>

        <h2 class="text-xl mb-10">Ce que disent vos clients :</h2>

        <div class="card w-full md:w-2/3 shadow-shadd rounded p-8 mb-8"> <!-- start card -->

            <div class="part-one flex justify-between items-center border-grey border-b-2 pb-4 mb-8">
                <div class="flex flex-col">
                    <span class="font-semibold">Salim B</span>
                    <span class="text-grey">à 12/2/21 14:33</span>
                </div>
                
                <i class="fas fa-flag text-red"></i>
            </div>
            <div class="part-two mb-8">
                <span class="note font-semibold text-xl">4,3/5</span>
                <p class="review mt-4"> 
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos sed, eo
                    s repellat blanditiis voluptas nulla quis vero iusto 
                    molestiae corrupti accusantium rem aliquid reiciendis doloremque eveniet fuga, inventore earum itaque. 
                </p>
            </div>

            <div class="inline-block w-full"><!-- Reponse/ modifier ou repondre  -->
                <button class="float-right bg-blue rounded-md text-white px-8 py-3"> Répondre</button>
            </div>

        </div> <!-- end card -->

        <div class="card w-full md:w-2/3 shadow-shadd rounded p-8 mb-8"> <!-- start card -->

            <div class="part-one flex justify-between items-center border-grey border-b-2 pb-4 mb-8">
                <div class="flex flex-col">
                    <span class="font-semibold">Hanane M</span>
                    <span class="text-grey">à 12/2/21 14:33</span>
                </div>
                
                <i class="fas fa-flag text-red"></i>
            </div>
            <div class="part-two mb-8">
                <span class="note font-semibold text-xl">4,3/5</span>
                <p class="review mt-4"> 
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos sed, eo
                    s repellat blanditiis voluptas nulla quis vero iusto 
                    molestiae corrupti accusantium rem aliquid reiciendis doloremque eveniet fuga, inventore earum itaque. 
                </p>
            </div>

            <span class="text-md text-grey mb-4">Votre réponse :</span>
            <div class="part-three px-4 md:px-8 border-worange border-l-2 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, dolores, reiciendis animi natus 
                    veritatis quidem soluta in quia quibusdam eligendi ex dolor adipisci dolorum deleniti vero asperio
                    res quae, nostrum itaque?
                </p>
            </div>

            <div class="inline-block w-full"><!-- Reponse/ modifier ou repondre  -->
                <button class="float-right bg-blue rounded-md text-white px-8 py-3"> Modifier</button>
            </div>

        </div> <!-- end card -->
        <a href="/logout">Déco</a>
        </div>

@endsection
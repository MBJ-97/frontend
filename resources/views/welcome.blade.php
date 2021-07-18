@extends('layouts.main')

@section('content')

                <div style="height: 425px; background-image: url(' {{asset('images/assets/main/bg.svg') }} ');" class="img-hero mt-12 px-6 flex flex-col items-center justify-between">
                    
                        <div class="mt-2 md:mt-12 text-center mb-10">

                                <h1 class=" text-blue font-black text-6xl">Trouvez & Notez</h1>
                                <p class=" text-white font-normal text-4xl" >Toutes les adresses que vous cherchez</p>        
                        </div>
                        <div class="search-adress py-8 px-6 shadow-shadd bg-white block sm:inline-block lg:w-2/3 -mb-12 sm:w-full rounded">
                            <form class="flex sm:flex-row flex-col justify-between items-center " action="">
                                    <div class="sm:w-1/3 w-full flex items-center sm:mr-8 mr-0">
                                        <i class="fas fa-search fa-2x text-grey mr-4"></i>
                                        <input class="outline-none  text-wblack sm:text-xl lg:text-2xl h-20 w-full " type="text" placeholder="Que cherchez vous ?">
                                    </div>

                                    <div class="border-left-solid h-12" >

                                    </div>

                                    <div class="sm:w-1/3 w-full flex items-center sm:mb-0 mb-12">
                                        <i class="fas fa-map-marker-alt fa-2x text-grey mr-4"></i>
                                        <input list="wilayas" class="outline-none  text-wblack sm:text-xl lg:text-2xl h-20 w-full" type="text" placeholder="Wilaya">
                                        <datalist id="wilayas">
                                            <option value="alger">
                                            <option value="oran">
                                            <option value="constantine">
                                            <option value="bejaia">
                                            <option value="Catégorie">
                                        </datalist>
                                    </div>
                                    <button class="bg-blue sm:w-1/4 w-full h-20 text-white sm:text-2xl text-lg  px-4 py-3 rounded-md">Werili</button>
                            </form>
                            
                        </div>
                </div>

@endsection

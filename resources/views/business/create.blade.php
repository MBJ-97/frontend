@extends('layouts.business')

@section('content')

<div class="container mx-auto mt-16 font-rubik text-wblack">
    <h1 class=" mb-4 text-3xl">Enregistrez votre business</h1>
    <p>Enregistrez votre business pour bénéficier d’une visibilitée supplementaire en ligne ainsi que d’avoir la possibilite de recolter le feedback de vos clients. C’est gratuit ! et c’est que du positif !</p>

    <div class="mt-16">
        
        <form action="/storebusiness" method="POST">
            @csrf
            <div class="mb-16">
                <h3 class="text-2xl border-b-8 pb-0 border-worange">1. Introduisez votre activité </h3>
                <div class="px-6 pt-8 flex flex-wrap mb-8">
                    <div class="w-full mb-10 md:w-1/2 md:pr-4 md:mb-0 flex flex-col">
                        <label class="mb-4">Nom de votre établissement</label>
                        <span class="text-red text-md"> @error('name') {{$message}} @enderror </span>
                        <input name="name" placeholder="Expl: Patisseries du jour" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="text">
                    </div>

                    <div class="w-full mb-10 md:w-1/2 md:mb-0 flex flex-col">
                        <label class="mb-4">Description</label>
                        <span class="text-red text-md"> @error('description') {{$message}} @enderror </span>
                        <textarea name="description" placeholder="Expl: Décrivez votre activité au public " class="outline-none px-4 border-2 border-blue focus:border-worange rounded" rows="5"></textarea>
                    </div>
                </div>
            </div> <!-- END OF STEP  -->

            <div class="mb-16">
                <h3 class="text-2xl border-b-8 pb-0 border-worange">2. Classification</h3>
                <div class="px-6 pt-8 flex flex-wrap mb-8">
                    <div class="w-full mb-10 md:w-1/2 md:pr-4 md:mb-0 flex flex-col">
                        <label class="mb-4">Catégorie</label>
                        <span class="text-red text-md"> @error('category') {{$message}} @enderror </span>
                        <select name="category" class="appearance-none outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded">
                            <option value="" disabled selected>Selectionner</option>
                            <option value="Food">Food</option>
                            <option value="Agencies">Agencies</option>
                        </select>
                    </div>

                    <div class="w-full mb-10 md:w-1/2 md:mb-0 flex flex-col">
                        <label class="mb-4">Sous-catégorie</label>
                        <span class="text-red text-md"> @error('subcat') {{$message}} @enderror </span>
                        <select name="subcat" class="appearance-none outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded">
                            <option value="" disabled selected>Selectionner</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="fastfood">fastfood</option>
                        </select>
                    </div>
                </div>
            </div> <!-- END OF STEP  -->

            <div class="mb-16">
                <h3 class="text-2xl border-b-8 pb-0 border-worange">3. Localisation </h3>
                <div class="px-6 pt-8 flex flex-wrap mb-8">
                    <div class="w-full mb-10 md:w-1/2 md:pr-4 md:mb-0 flex flex-col">
                        <label class="mb-4">Wilaya</label>
                        <span class="text-red text-md"> @error('wilaya') {{$message}} @enderror </span>
                        <select name="wilaya" class="appearance-none outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded">
                            <option value="" disabled selected>Selectionner</option>
                            <option value="alger">Alger</option>
                            <option value="tizi ouzou">Tizi ouzou</option>
                        </select>
                    </div>

                    <div class="w-full mb-10 md:w-1/2 flex flex-col">
                        <label class="mb-4">Commune</label>
                        <span class="text-red text-md"> @error('commune') {{$message}} @enderror </span>
                        <select name="commune" class="appearance-none outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded">
                            <option value="" disabled selected>Selectionner</option>
                            <option value="kouba">kouba</option>
                            <option value="dar el beida">dar el beida</option>
                        </select>
                    </div>

                    <div class="w-full mb-10 flex flex-col">
                        <label class="mb-4">Adresse complète</label>
                        <span class="text-red text-md"> @error('address') {{$message}} @enderror </span>
                        <input name="address"  placeholder="Exemple: Cité des annasers local n5" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="text">
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="mb-4">Lien google maps</label>
                        <input name="gmaps" placeholder="Collez votre lien vers maps" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="text">
                    </div>
                </div>
            </div> <!-- END OF STEP  -->

            <div class="mb-16">
                    <h3 class="text-2xl border-b-8 pb-0 border-worange">4. Contact et réseaux sociaux</h3>
                    <div class="px-6 pt-8 flex flex-wrap mb-8">
                        <div class="w-full mb-10 md:w-1/2 md:pr-4 md:mb-0 flex flex-col">
                            <label class="mb-4">Numéro de téléphone</label>
                            <span class="text-red text-md"> @error('phone') {{$message}} @enderror </span>
                            <input name="phone"  placeholder="Votre numéro joignable" class="appearance-none outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="number">
                        </div>
    
                        <div class="w-full mb-10 md:w-1/2 flex flex-col">
                            <label class="mb-4">Email</label>
                            <span class="text-red text-md"> @error('email') {{$message}} @enderror </span>
                            <input name="email"  placeholder="Votre email" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="email">
                        </div>
    
                        <div class="w-full md:w-1/2 md:pr-4 mb-10 flex flex-col">
                            <label class="mb-4">Page Facebook</label>
                            <input name="facebook" placeholder="Collez le lien qui mène à votre page Facebook" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="text">
                        </div>

                        <div class="w-full mb-10 md:w-1/2 flex flex-col">
                            <label class="mb-4">Page Instagram</label>
                            <input name="instagram" placeholder="Collez le lien qui mène à votre page Instagram" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="text">
                        </div>

                        <div class="w-full md:w-1/2 md:pr-4 flex flex-col">
                            <label class="mb-4">Votre site web</label>
                            <input name="website" placeholder="Collez votre lien vers votre site web" class="outline-none h-12 px-4 border-2 border-blue focus:border-worange rounded" type="text">
                        </div>
                    </div>
                </div> <!-- END OF STEP  -->
                <div class="mb-16">
                    <h3 class="text-2xl border-b-8 pb-0 border-worange">5. Photo de profile</h3>
                    <div class="px-6 pt-8 flex flex-wrap mb-8">
                        <div class="w-full mb-10 md:w-1/2 md:pr-4 md:mb-0 flex flex-col">
                            <label class="mb-4">Photo de profile (format carré)</label>
                            <span class="text-red text-md"> @error('photo') {{$message}} @enderror </span>
                            <input name="photo" class="outline-none flex items-center h-12 px-4 border-2 border-blue focus:border-worange rounded" type="file">
                        </div>
                    </div>
                </div> <!-- END OF STEP  -->

                <input class="bg-blue rounded-md px-20 py-4 text-white text-xl block mx-auto my-20 cursor-pointer" value="Continuer" type="submit">  <!-- Submit button-->
    

            
        </form>
        
    </div> <!--Form-->
</div>

@endsection
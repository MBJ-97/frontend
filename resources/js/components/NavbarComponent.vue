<template>
      <header class="mt-2 sm:flex sm:justify-between sm:items-center">
        <div class="flex items-center justify-between px-4 sm:px-0 py-3 md:w-1/3">
                    <div class=" mx-auto sm:ml-8">
                        <img class="h-10" :src=" logoimg " alt="werili">
                    </div>
                    <div class="sm:hidden">
                        <button @click="isOpen = !isOpen" type="button" class="block text-blue">
                            <i v-if="!isOpen" class="fas fa-bars fa-2x"></i>
                            <i v-if="isOpen" class="fas fa-times fa-2x"></i>
                        </button>
                    </div>
        </div>
                            <div :class="isOpen ? 'block' : 'hidden' " class="px-6 py-3 sm:flex sm:items-center sm:mt-4 sm:w-1/3 mx-auto">
                                <div class="mx-auto text-center sm:flex">
                                    <a class="text-wblack pb-2 block font-medium font-jost" href="">Catégories</a>
                                    <a class="text-wblack mt-1 pb-2 block font-medium font-jost sm:mt-0 sm:ml-4" href="">Business</a>
                                    <a class="text-wblack mt-1 pb-2 block font-medium font-jost sm:mt-0 sm:ml-4" href="">About</a>
                                </div>
                            </div>
                                
                        
                                 
                                <div :class="isOpen ? 'block' : 'hidden' " class="py-3 sm:flex sm:items-center sm:mt-2 mx-auto sm:mr-0 sm:w-1/3">
                                    <button class="sm:mt-0 mt-6 bg-blue rounded-md px-8 py-3 text-white block font-jost mx-auto sm:mr-8">Login</button> 
                                </div>       
    </header>
</template>

<script>
export default {

    props: ['logoimg'],

    data: function() {
        return { 
            isOpen: false,
        }
    },

        methods: {
            
        togNav: function() {
            this.isOpen = !this.isOpen;
        }
        
    }

}
</script>

<style>

</style>
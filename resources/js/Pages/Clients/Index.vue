<template>
    <app-layout>


        <div class="absolute w-full h-96 bg-gray-800 bg-opacity-100">

            <div class="py-12">


                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-between m-4 text-white">
                        <h2 class="text-4xl font-semibold">Clients</h2>
                        <a class="bg-indigo-500	rounded-md p-2" href="postClient">+ Créer un client</a>
                    </div>

                    <div class="bg-white overflow-hidden shadow-xl rounded-2xl border-2">
                            <div class=" bg-gray-100 flex space-x-4 p-3 uppercase font-thin text-gray-600">
                                <p class="flex-shrink w-1/3">raison sociale</p>
                                <p class="flex-shrink w-1/3"> description </p>
                                <p class="flex-shrink w-1/6">projets</p>
                                <div class="flex-shrink w-1/6 end"></div>
                            </div>
                            <div v-for="client in this.clientsList" v-bind:key="client.id" class="flex space-x-4 p-4 border">
                                <p class="flex-shrink w-1/3 font-extrabold">{{client.raison_sociale}}</p>
                                <p class="flex-shrink w-1/3"> {{client.description}} </p>
                                <p class="flex-shrink w-1/6 text-gray-500">{{client.projet}}</p>
                               <inertia-link class="flex-shrink w-1/6 text-indigo-500 end" :href="route('client.edit', client.id)" >Editer</inertia-link>
                            </div>
                    </div>
                </div>
            </div>
        </div>





    </app-layout>
</template>
<style>

.end {
    text-align: end;
}

</style>

<script>
import AppLayout from '../../Layouts/AppLayout'

export default {
    // name: 'projets',
    components: {
        AppLayout
    },
    data() {
        return {
            clientsList:this.clients
        }
    },
    props:['clients']
}
</script>

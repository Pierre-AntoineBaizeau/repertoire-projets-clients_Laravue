<template>
    <app-layout>
        <div class="absolute w-full h-96 bg-gray-800 bg-opacity-100">

            <div class="py-12">


                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <div class="flex justify-between m-4 text-white">
                        <h2 class="text-4xl font-semibold">Projets</h2>
                        <a class="bg-indigo-500	rounded-md p-2" href="postProjet">+ Créer un projet</a>
                    </div>

                    <div class="bg-white overflow-hidden shadow-xl rounded-2xl border-2">
                        <div class=" bg-gray-100 flex space-x-4 p-3 uppercase font-thin text-gray-600">
                            <p class="flex-shrink w-3/12">Titre</p>
                            <p class="flex-shrink w-3/12"> Client </p>
                            <p class="flex-shrink w-3/12">Description</p>
                            <p class="flex-shrink w-2/12 center">Tickets</p>
                            <div class="flex-shrink w-1/12 end"></div>
                        </div>
                        <div v-for="projet in this.projetList" v-bind:key="projet.id" class="flex space-x-4 p-4 border">
                            <p class="flex-shrink w-3/12 font-extrabold">{{projet.titre}}</p>
                            <p class="flex-shrink w-3/12"> {{projet.description}} </p>
                            <p class="flex-shrink w-3/12"> {{projet.description}} </p>
                            <p class="flex-shrink w-2/12 center text-gray-500">{{projet.statut_du_projet}}</p>
                            <div class="flex-shrink w-1/12 text-indigo-500 end" >
                            <inertia-link :href="route('projet.edit', projet.id)" >Editer</inertia-link>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </app-layout>
</template>

<style>

.center {
    text-align: center;
}

.end {
    text-align: end;
}

</style>

<script>
import AppLayout from '../../Layouts/AppLayout'
import PostProjet from "@/Components/Post/PostProjet";

export default {
    // name: 'projets',
    components: {
        AppLayout,
        PostProjet

    },
    data() {
        return{
            projetList: this.projets
        }
    },

    props: ['projets']
}
</script>

<template>
<app-layout>

    <div class="absolute w-full h-96 bg-gray-800 bg-opacity-100">

<div class="min-h-screen  items-center justify-center bg-gray py-12 px-20">
  <div class="py-12">

                    <div class="flex justify-between ml-4 mb-4 text-white">
                        <h2 class="text-4xl font-semibold">Projets</h2>
                        <a class="bg-red-500 rounded-md p-2" href="#">Supprimer</a>
                    </div>

    <form class="p-8 bg-white rounded-xl" @submit.prevent="submit">

      <div>
          <div class="border-b py-5">
                <h3 class="text-gray-900 text-lg font-medium">Responsable projet</h3>
                <p class="text-sm leading-5 py-3 font-normal text-gray-500">Ces informations serviront à savoir qui dirige le projet du coté du client</p>
            </div>
        <div class="flex border-b py-5">
          <label for="nom" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700" >Nom</label>
          <input id="nom" name="nom" type="name" required v-model="form.nom_responsable" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>
        <div class="flex border-b py-5">
          <label for="prenom" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700" >Prenom</label>
          <input id="prenom" name="password" type="prenom" required v-model="form.prenom_responsable" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>
        <div class="flex border-b py-5">
          <label for="phoneNumber" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Téléphone</label>
          <input id="phone" name="phoneNumber" type="phone" required v-model="form.telephone_responsable" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="+33 (0) 660 72 55 02">
        </div>
        <div class="flex border-b py-5">
          <label for="mail" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Email</label>
          <input id="email" name="mail" type="email" required v-model="form.email_responsable" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="&#xf002; you@example.com">
        </div>
            <div class="border-b py-5">
                <h3 class="text-gray-900 text-lg font-medium">Information projet</h3>
                <p class="text-sm leading-5 py-3 font-normal text-gray-500">Use a permant address where you can receive mail.</p>
            </div>
          <div class="flex border-b py-5">
          <label for="titre" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Titre</label>
          <input id="titre" name="titre" type="titre" required v-model="form.titre" class="w-3/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>
         <div class="flex border-b py-5">
          <label for="description" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Description</label>
          <textarea id="description" name="description" type="description" required v-model="form.description" class="w-3/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"></textarea>
        </div>
          <div class="flex border-b py-5">
          <label for="start" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Debut du projet</label>
          <input id="start" name="start" type="date" required v-model="form.start" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="dd / mm / yyyy">
        </div>
          <div class="flex border-b py-5">
          <label for="end" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Fin du projet estimé</label>
          <input id="end" name="end" type="date" required v-model="form.end" class="w-3/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="dd / mm / yyyy">
        </div>

         <div class="flex border-b py-5">
          <label for="statut" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700" >status du projet</label>
          <input id="statut" name="statut" type="number" required v-model="form.statut_du_projet" class="w-1/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="En cours">
        </div>
        <div class="flex border-b py-5">
          <label for="vendu" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Nombre de jours vendus</label>
          <input id="vendu" name="vendu" type="number" required v-model="form.nombre_jours_vendus" class="w-3/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="25">
        </div>
      </div>



      <div class="flex mt-4">
          <div class="w-4/6"></div>
        <a href="projets" class="group relative w-1/6 flex justify-center py-2 mx-2 border-2 border-grey text-sm font-medium rounded-md text-black bg-gray-100 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Annuler</a>
        <button type="submit" class="group relative w-1/6 flex justify-center py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sauvegarder</button>
      </div>
    </form>
  </div>
</div>
    </div>
</app-layout>
</template>
<style>
@import "//netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.css";

.mainLoginInput::-webkit-input-placeholder {
font-family: FontAwesome;
font-weight: normal;
overflow: visible;
vertical-align: top;
display: inline-block !important;
padding-left: 5px;
padding-top: 2px;
--tw-text-opacity: 1;
color: rgba(107, 114, 128, var(--tw-text-opacity));
}

.mainLoginInput::-moz-placeholder  {
font-family: FontAwesome;
font-weight: normal;
overflow: visible;
vertical-align: top;
display: inline-block !important;
padding-left: 5px;
padding-top: 2px;
--tw-text-opacity: 1;
color: rgba(107, 114, 128, var(--tw-text-opacity));
}

.mainLoginInput:-ms-input-placeholder  {
font-family: FontAwesome;
font-weight: normal;
overflow: visible;
vertical-align: top;
display: inline-block !important;
padding-left: 5px;
padding-top: 2px;
--tw-text-opacity: 1;
color: rgba(107, 114, 128, var(--tw-text-opacity));
}
</style>
<script>
import AppLayout from '../../Layouts/AppLayout'

export default {

    components: {
        AppLayout
    },
    data() {
        return {
            form: {
                client_id: 1,
                nom_responsable: null,
                prenom_responsable: null,
                telephone_responsable: null,
                email_responsable: null,
                description: null,
                titre: null,
                start: null,
                end: null,
                statut_du_projet: null,
                nombre_jours_vendus: null
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/projects', this.form)
        }
    }

}
</script>

<style>

</style>

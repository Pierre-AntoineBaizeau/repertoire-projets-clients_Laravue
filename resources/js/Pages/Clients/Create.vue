<template>
<app-layout>






    <div class="absolute w-full h-96 bg-gray-800 bg-opacity-100">

<div class="min-h-screen  items-center justify-center bg-gray py-12 px-20">
  <div class="py-12">

                    <div class="flex justify-between ml-4 mb-4 text-white">
                        <h2 class="text-4xl font-semibold">Créer un client</h2>
                        <a class="bg-red-500 rounded-md p-2" href="#">Supprimer</a>
                    </div>

    <form class="p-8 bg-white rounded-xl" @submit.prevent="submit">

      <div>
          <div class="border-b py-5">
                <h3 class="text-gray-900 text-lg font-medium">Information société</h3>
                <p class="text-sm leading-5 py-3 font-normal text-gray-500">Informations légales de l’entreprise</p>
            </div>
        <div class="flex border-b py-5">
          <label for="description" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700" >Description</label>
          <input id="description" name="description" type="description" required v-model="form.description" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

        <div class="flex border-b py-5">
          <label for="raison" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700" >Raison sociale</label>
          <input id="raison" name="raison" type="raison" required v-model="form.raison_sociale" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

        <div class="flex border-b py-5">
          <label for="statut_juridique" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Statut juridique</label>
          <input id="statut_juridique" name="statut_juridique" type="statut_juridique" required v-model="form.statut_juridique" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

        <div class="flex border-b py-5">
          <label for="capital" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Capital</label>
          <input id="capital" name="capital" type="capital" required v-model="form.capital" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

        <div class="flex border-b py-5">
          <label for="numero_siret" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">numéro de siret</label>
          <input id="numero_siret" name="numero_siret" type="numero_siret" required v-model="form.numero_siret" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

         <div class="flex border-b py-5">
          <label for="code_naf" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Code NAF</label>
          <input id="code_naf" name="code_naf" type="code_naf" required v-model="form.code_naf" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

            <div class="border-b py-5">
                <h3 class="text-gray-900 text-lg font-medium">Adresse</h3>
                <p class="text-sm leading-5 py-3 font-normal text-gray-500">Localisation du siège social.</p>
            </div>

          <div class="flex border-b py-5">
          <label for="pays" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">pays</label>
          <input id="pays" name="pays" type="pays" required v-model="form.pays" class="w-3/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

          <div class="flex border-b py-5">
          <label for="adresse" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Adresse</label>
          <textarea id="adresse" name="adresse" type="adresse" required v-model="form.adresse" class="w-3/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" ></textarea>
        </div>

         <div class="flex border-b py-5">
          <label for="code_postal" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700" >Code postal</label>
          <input id="code_postal" name="code_postal" type="code_postal" required v-model="form.code_postal" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

        <div class="flex border-b py-5">
          <label for="ville" class="mt-2 w-4/12 text-sm leading-5 font-medium text-gray-700">Ville</label>
          <input id="ville" name="ville" type="ville" required v-model="form.ville" class="w-5/12 px-3 py-2 rounded-lg border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
        </div>

      </div>



      <div class="flex mt-4">
          <div class="w-4/6"></div>
        <a href="#" class="group relative w-1/6 flex justify-center py-2 mx-2 border-2 border-grey text-sm font-medium rounded-md text-black bg-gray-100 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Annuler</a>
        <button type="submit" class="group relative w-1/6 flex justify-center py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sauvegarder</button>
      </div>
    </form>
  </div>
</div>
    </div>



</app-layout>
</template>

<script>
import AppLayout from '../../Layouts/AppLayout'

export default {

    components: {
        AppLayout
    },
    data() {
        return {
            form: {
                description: null,
                raison_sociale: null,
                statut_juridique: null,
                capital: null,
                numero_siret: null,
                code_naf: null,
                pays: null,
                adresse: null,
                code_postal: null,
                ville: null


            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/clients', this.form)
        }
    }

}
</script>

<style>

</style>

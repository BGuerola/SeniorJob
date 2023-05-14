<x-appcand title="Lista ofertas">
    {{-- <div class="flex flex-col bg-quasinegre h-screen"> --}}

<div class="flex flex-col justify-center items-center bg-rosaclar w-full h-screen">
<form class = "m-40 mt-20 w-3/4">

        <fieldset class="border-2">

        <!-- Form Name -->
        <legend class ="text-xl font-medium text-gris">Lista Ofertas de Trabajo</legend>

        <div class="flex ml-40 mr-40 justify-end">
        <!-- Text input-->
        <div class="mb-6 grow">
          <label for="Empresa" class="block mb-2 text-sm font-medium text-gris">Empresa</label>
          <input id="Empresa" class="bg-white border border-grismig text-gris text-sm rounded-lg focus:ring-rosa focus:border-rosa block w-full p-2.5"name="Empresa" type="text" placeholder="Empresa">
        </div>

        <!-- Text input-->
        <div class="mb-6">
          <label for="Fecha de publicación" class="block mb-2 text-sm font-medium text-gris">Fecha</label>
          <input id="Fecha de publicación" class="bg-white border border-grismig text-gris text-sm rounded-lg focus:ring-rosa focus:border-rosa block w-full p-2.5"name="Fecha de publicación" type="date" placeholder="fecha de publicación">
        </div>
      </div>

      <div class="flex ml-40 mr-40 justify-end">
        <!-- Text input-->
        <div class="mb-6 grow">
          <label for="nompuesto" class="block mb-2 text-sm font-medium text-gris">Nombre Puesto</label>
          <div>
          <input id="nompuesto" class="bg-white border border-grismig text-gris text-sm rounded-lg focus:ring-rosa focus:border-rosa block w-full p-2.5"name="nompuesto" type="text" placeholder="Nombre Puesto">

          </div>
        </div>

        <!-- Text input-->
        <div class="mb-6">
          <label for="Localidad" class="block mb-2 text-sm font-medium text-gris">Localidad</label>
          <div>
          <input id="Localidad" class="bg-white border border-grismig text-gris text-sm rounded-lg focus:ring-rosa focus:border-rosa block w-full p-2.5"name="Localidad" type="text" placeholder="Localidad">

          </div>
        </div>
      </div>

        <button type="submit" class="text-white bg-roigclar hover:bg-roig focus:ring-4 focus:outline-none focus:ring-rosaclar font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>

        </fieldset>
    </form>
{{-- </div> --}}
</x-appcand>

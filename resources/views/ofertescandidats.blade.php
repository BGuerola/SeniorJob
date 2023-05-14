<x-appcand title="Mis ofertas">
    <div class="flex flex-col bg-quasinegre h-screen">

  <div class="flex flex-col justify-center items-center bg-rosaclar w-full h-screen">


    <!--el mateix diseny de formulari que en llistaofertes, codi diferent-->


    <form class = "m-40 mt-20 w-3/4">


        <fieldset class="border-2">

        <!-- Form Name -->
        <legend class ="text-xl font-medium text-gris">Lista Ofertas de Trabajo</legend>

        <!-- Text input-->
        <div class="flex ml-40 mr-40 justify-end">

          <div class="mb-6 grow">
            <label for="Empresa" class="block mb-2 text-sm font-medium text-gris">Empresa</label>
            <input id="Empresa" name="Empresa" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5"placeholder="Empresa">
          </div>

          <div class="mb-6">
            <label for="Fecha de publicación" class="block mb-2 text-sm font-medium text-gris">Fecha</label>
            <input id="Fecha de publicación" name="Fecha de publicación" type="date" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5"placeholder="fecha de publicación">
          </div>

        </div>


        <div class="flex ml-40 mr-40 justify-end">
          <!-- Text input-->
          <div class="mb-6 grow">
            <label for="nompuesto" class="block mb-2 text-sm font-medium text-gris"> Nombre Puesto</label>
            <div>
            <input id="nompuesto" name="nompuesto" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5"placeholder="Nombre Puesto">

            </div>
          </div>

          <div class="mb-6">
            <label for="Localidad" class="block mb-2 text-sm font-medium text-gris">Localidad</label>
            <div>
            <input id="Localidad" name="Localidad" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5"placeholder="Localidad">

            </div>
          </div>
        </div>

        <div class="flex ml-40 mr-40 justify-end">
          <!-- Select Basic -->
          <div class="mb-6">
            <label for="tiposal"class="block mb-2 text-sm font-medium text-gris">Estado de la candidatura</label>
            <div class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5">
                <select id="tiposal" name="tiposal">
                  <option value="Inscrito">Inscrito</option>
                  <option value="Procesando">Procesando</option>
                  <option value="Reserva">En reserva</option>
                  <option value="Finalista">Finalista</option>
                  <option value="Descartado">Descartado</option>
                </select>
            </div>
          </div>
          <div class="mb-6">
              <button type="submit" class="mt-7 ml-2 text-white bg-roigclar hover:bg-roig focus:ring-4 focus:outline-none focus:ring-rosaclar font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center">Entrar</button>
          </div>
        </div>

          <!-- Button -->

        </fieldset>


        </form>

</div>
    </div>
</x-appcand>

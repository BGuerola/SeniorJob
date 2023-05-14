<x-appemp title="Perfil empresa">
    {{-- <div class="flex flex-col bg-quasinegre h-screen"> --}}

        <div class="flex flex-col justify-center items-center bg-rosaclar w-full h-screen">

          <form class = "m-40 mt-20 mb-20 w-3/4">

                <fieldset class="border-2">

                <!-- Form Name -->
                <legend class ="text-xl font-medium text-gris">Perfil Empresa</legend>

                <div class="flex ml-40 mr-40 justify-between">

                  <!-- Text input-->
                  <div class="mb-6 grow">
                    <label for="nombreEmp" class="block mb-2 text-sm font-medium text-gris">Nombre empresa</label>
                    <input id="nombreEmp" name="nombreEmp" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="nombre de la empresa">
                  </div>

                  <!-- Text input-->
                  <div class="mb-6">
                    <label for="cif" class="block mb-2 text-sm font-medium text-gris">CIF</label>
                    <input id="cif" name="cif" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="cif">
                  </div>

                  <!-- Text input-->
                  <div class="mb-6">
                    <label for="logo" class="block mb-2 text-sm font-medium text-gris">Logo</label>
                    <input id="logo" name="logo" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="logo">
                  </div>
                </div>

              <div class="flex ml-40 mr-40 justify-between">
                      <!-- Text input-->
                <div class="mb-6 grow">
                  <label for="localidad" class="block mb-2 text-sm font-medium text-gris">Localidad</label>
                  <input id="localidad" name="localidad" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="localidad">
                </div>

                <!-- Text input-->
                <div class="mb-6">
                  <label for="codpostal" class="block mb-2 text-sm font-medium text-gris">Código Postal</label>
                  <input id="codpostal" name="codpostal" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="código postal">
                </div>

                <!-- Text input-->
                <div class="mb-6">
                  <label for="provincia" class="block mb-2 text-sm font-medium text-gris">Provincia</label>
                  <input id="provincia" name="provincia" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="provincia">
                </div>

              </div>

                <div>
                <div class="flex ml-40 mr-40 justify-between">
                  <!-- Text input-->
                  <div class="mb-6 grow">
                    <label for="nomcont" class="block mb-2 text-sm font-medium text-gris">Nombre contacto</label>
                    <input id="nomcont" name="nomcont" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="nombre del contacto">
                  </div>

                  <!-- Text input-->
                  <div class="mb-6 grow">
                    <label for="apellido1cont" class="block mb-2 text-sm font-medium text-gris">Primer apellido contacto</label>
                    <input id="apellido1cont" name="apellido1cont" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="primer apellido">
                  </div>

                  <!-- Text input-->
                  <div class="mb-6 grow">
                    <label for="apellido2cont" class="block mb-2 text-sm font-medium text-gris">Segundo apellido contacto</label>
                    <input id="apellido2cont" name="apellido2cont" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="segundo apellido">
                  </div>
                </div>

                <div class="flex ml-40 mr-40 justify-end">

                  <!-- Text input-->
                  <div class = "mb-6">
                    <label for="telfemp" class="block mb-2 text-sm font-medium text-gris">Télefono</label>
                    <input id="telfemp" name="telfemp" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="teléfono">
                  </div>

                  <!-- Text input-->
                  <div class = "mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gris">Email</label>
                    <input id="email" name="email" type="text" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="email">
                  </div>

                </div>

                <!-- Text input-->
                <div class="ml-40 mr-40 mb-6">
                  <label for="empsele" class="block mb-2 text-sm font-medium text-gris">Empresa de selección
                  <input id="empsele" name="empsele" type="checkbox"></label>
                </div>

                      <!-- Textarea -->
              <div class="ml-40 mr-40 mb-6">
                <label for="descEmp" class="block mb-2 text-sm font-medium text-gris">Descripción de la empresa</label>
                <textarea id="" class="bg-white border border-grismig text-gris text-sm rounded-lg focus:ring-rosa focus:border-rosa block w-full p-2.5" placeholder="Presentacion"></textarea>
              </div>



                </fieldset>
                <button type="submit" class="text-white bg-roigclar hover:bg-roig focus:ring-4 focus:outline-none focus:ring-rosaclar font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
          </form>


        </div>

    {{-- </div> --}}
</x-appemp>

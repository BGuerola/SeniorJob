<x-appemp title="Gestión ofertas">
    <div class="flex flex-col bg-quasinegre h-screen">

              <br><br><br>

            <div class="flex flex-col bg-rosaclar h-screen">

                <form class = "m-20">
                    <div class="mb-6">
                      <label for="email" class="block mb-2 text-sm font-medium text-gris">Your email</label>
                      <input type="email" id="email" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="name@flowbite.com" required>
                    </div>
                    <div class="mb-6">
                      <label for="password" class="block mb-2 text-sm font-medium text-gris">Your password</label>
                      <input type="password" id="password" class="bg-white border border-grismig text-gris text-sm rounded-lg focus:ring-rosa focus:border-rosa block w-full p-2.5" placeholder="password" required>
                    </div>

                    <div class="flex items-start mb-6">
                      <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-grismig rounded bg-grisclar focus:ring-3 focus:rosaclar" required>
                      </div>
                      <label for="remember" class="ml-2 text-sm font-medium text-gris dark:text-grismig">Remember me</label>
                    </div>

                    <button type="submit" class="text-white bg-roigclar hover:bg-roig focus:ring-4 focus:outline-none focus:ring-rosaclar font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>

                </form>

        </div>
    </div>
</x-appemp>

<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <section class="pt-12 pb-12 bg-red-50">
            <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
              <div class="w-full">
      
                <h1
                  class="mb-4 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                  Realiza tu reserva (paso 1 de 2)
                </h1>
                <form method="POST" action="{{route('reservations.store.step.one')}}">
                    @csrf
                    <div class="sm:col-span-6">
                      <label for="first_name" class="block text-sm font-medium text-gray-700"> Nombre </label>
                      <div class="mt-1">
                        <input type="text" id="first_name" name="first_name" value="{{$reservation->first_name ?? ''}}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('first_name')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="last_name" class="block text-sm font-medium text-gray-700"> Apellidos </label>
                      <div class="mt-1">
                        <input type="text" id="last_name" name="last_name" value="{{$reservation->last_name ?? ''}}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('last_name')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="email" class="block text-sm font-medium text-gray-700"> E-mail </label>
                      <div class="mt-1">
                        <input type="email" id="email" name="email" value="{{$reservation->email ?? ''}}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('email')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="tel_number" class="block text-sm font-medium text-gray-700"> Teléfono </label>
                      <div class="mt-1">
                        <input type="text" id="tel_number" name="tel_number" value="{{$reservation->tel_number ?? ''}}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('tel_number')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="res_date" class="block text-sm font-medium text-gray-700"> Fecha </label>
                      <div class="mt-1">
                        <input type="datetime-local" id="res_date" name="res_date" min="{{$min_date->format('Y-m-d\TH:i:s')}}" max="{{$max_date->format('Y-m-d\TH:i:s')}}" 
                        value="{{$reservation ? $reservation->res_date : ''}}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      <span class="text-xs">El horario debe estar entre las 17h y las 23h</span>
                      @error('res_date')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="guest_number" class="block text-sm font-medium text-gray-700"> Número de personas </label>
                      <div class="mt-1">
                        <input type="number" id="guest_number" name="guest_number" value="{{$reservation->guest_number ?? ''}}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('guest_number')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    {{-- <div class="mt-6 p-4">
                      <button type="submit" 
                      class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg">Siguiente paso</button>
                  
                    </div>

                  </form>
                <div class="">
                  <label class="block text-base">
                    Your Message
                  </label>
                  <textarea name="" id="" rows="8" cols="30"
                    class="w-full p-3 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                    placeholder=""></textarea>
                </div> --}}
                <div class ="mt-6 p-4 flex justify-end">
                    <button type="submit" 
                      class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                      Siguiente paso
                    </button>
                </div>

      
              </div>
            </div>
          </section>
    </div>
</x-guest-layout>
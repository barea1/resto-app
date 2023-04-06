<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2">
              <a href="{{route('admin.reservations.index')}}" 
              class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg">Reservas</a>
          </div>
          <div class="m-2 p-2 bg-slate-100 rounded">
              <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                  <form method="POST" action="{{route('admin.reservations.store')}}">
                    @csrf
                    <div class="sm:col-span-6">
                      <label for="first_name" class="block text-sm font-medium text-gray-700"> Nombre </label>
                      <div class="mt-1">
                        <input type="text" id="first_name" name="first_name" 
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('first_name')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="last_name" class="block text-sm font-medium text-gray-700"> Apellidos </label>
                      <div class="mt-1">
                        <input type="text" id="last_name" name="last_name" 
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('last_name')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="email" class="block text-sm font-medium text-gray-700"> E-mail </label>
                      <div class="mt-1">
                        <input type="email" id="email" name="email" 
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('email')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="tel_number" class="block text-sm font-medium text-gray-700"> Teléfono </label>
                      <div class="mt-1">
                        <input type="text" id="tel_number" name="tel_number" 
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('tel_number')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="res_date" class="block text-sm font-medium text-gray-700"> Fecha </label>
                      <div class="mt-1">
                        <input type="datetime-local" id="res_date" name="res_date" 
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('res_date')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6">
                      <label for="guest_number" class="block text-sm font-medium text-gray-700"> Número de personas </label>
                      <div class="mt-1">
                        <input type="number" id="guest_number" name="guest_number" 
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                      </div>
                      @error('guest_number')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                      <label for="tables" class="block text-sm font-medium text-gray-700">Mesa (capacidad)</label>
                      <div class="mt-1">
                        <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                          @foreach ($tables as $table)
                          <option value="{{$table->id}}">{{$table->name}} ({{$table->guest_number}} Personas)</option>
                       @endforeach  
                        </select>
                      </div>
                      @error('table_id')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mt-6 p-4">
                      <button type="submit" 
                      class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg">Guardar</button>
                  
                    </div>

                  </form>
                </div>
          </div>
       </div>
  </div>
</x-admin-layout>
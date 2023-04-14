<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <section class="pt-12 pb-12 bg-red-50">
            <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
                <div class="w-full">

                    <h1
                        class="mb-4 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                        Realiza tu reserva (paso 2 de 2)
                    </h1>
                    <form method="POST" action="{{ route('reservations.store.step.two') }}">
                        @csrf
                        <div class="sm:col-span-6 pt-5">
                            <label for="tables" class="block text-sm font-medium text-gray-700">Mesa (capacidad)</label>
                            <div class="mt-1">
                                <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}"@selected($table->id == $reservation->table_id)>
                                            {{ $table->name }} ({{ $table->guest_number }} Personas)</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('table_id')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6 p-4 flex justify-between" >
                          <a href="{{route('reservations.step.one')}}"class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                            Volver al paso 1</a>
                            <button type="submit"
                                class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                                Reservar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>

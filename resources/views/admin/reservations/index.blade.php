<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.reservations.create')}}" 
                class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg">Nueva Reserva</a>

            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre y apellidos
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mesa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Invitados
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation )
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$reservation->first_name}} {{$reservation->last_name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$reservation->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$reservation->res_date}}
                            </td>
                            <td class="px-6 py-4">
                                {{$reservation->table->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$reservation->guest_number}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
              
        </div>
    </div>
</x-admin-layout>
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.tables.create')}}" 
                class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg">Nueva Mesa</a>

            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Invitados
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ubicación
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acción
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{$table->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$table->guest_number}}
                            </td>
                            <td class="px-6 py-4">
                                {{$table->status}}
                            </td>
                            <td class="px-6 py-4">
                                {{$table->location}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{route('admin.tables.edit', $table->id)}}" 
                                        class="px-2 py-1 bg-green-500 hover:bg-green-700 rounded-lg text-white">Editar</a>
                                    <form 
                                        class="px-2 py-1 bg-red-500 hover:bg-red-700 rounded-lg text-white" 
                                        method="POST" 
                                        action="{{route('admin.tables.destroy', $table->id)}}"
                                        onsubmit="return confirm('¿Estás seguro?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Borrar</button>
    
                                    </form>
                                </div>
                         </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
               
        </div>
    </div>
</x-admin-layout>
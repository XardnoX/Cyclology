@extends('layouts.app2')
@section('content')

<!-- Success/Error Alerts -->
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6" role="alert">
        <strong class="font-bold">Úspěch!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

@if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6" role="alert">
        <strong class="font-bold">Chyba!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif

<!-- No Data Message -->
@if($data->isEmpty())
    <p class="text-center text-gray-700 font-medium">Nebyly nalezené žádné závody</p>
@else

<!-- Data Table -->
<div class="overflow-x-auto shadow-lg rounded-lg border border-gray-200 mb-10">
    <table class="min-w-full bg-white">
        <thead class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white">
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Název</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Odkaz</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Země</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Typ</th>
                @auth
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Akce</th>
                @endauth
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($data as $race)
                <tr class="border-b hover:bg-gray-100 transition duration-200 ease-in-out">
                    <td class="py-3 px-4">{{ $race->id }}</td>
                    <td class="py-3 px-4">{{ $race->default_name }}</td>
                    <td class="py-3 px-4">{{ $race->link }}</td>
                    <td class="py-3 px-4"><span class="fi fi-{{ $race->country }}"></span></td>
                    <td class="py-3 px-4">{{ $race->type }}</td>
                    @auth
                        <td class="py-3 px-4 flex space-x-2">
                            <!-- Delete Button -->
                            <form method="POST" action="/delete/{{ $race->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-red-500">
                                    Smazat
                                </button>
                            </form>
                            <!-- Edit Button -->
                            <a href="/{{ $race->default_name }}/{{ $race->id }}/edit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Editovat
                            </a>
                        </td>
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endif

<!-- Pagination Links -->
<div class="mt-6">
    {{ $data->links() }}
</div>

@endsection

@extends('layouts.app2')

@section('content')

<!-- Rider Profile Section -->
<div class="flex justify-center items-center mt-10">
    <div class="max-w-md w-full bg-white shadow-xl rounded-lg overflow-hidden">
        <img src="{{ asset('obrazky/rider/' . $data->photo) }}" alt="card-image" class="object-cover w-full h-60" />
        <div class="p-6">
            <h6 class="text-xl font-bold text-gray-800 mb-2">{{ $data->first_name }} {{ $data->last_name }}</h6>
            <p class="text-gray-600">
                <span class="font-medium">Datum narození:</span> {{ $data->date_of_birth }} <br>
                <span class="font-medium">Místo narození:</span> {{ $data->place_of_birth }} <br>
                <span class="font-medium">Váha:</span> {{ $data->weight }} kg<br>
                <span class="font-medium">Výška:</span> {{ $data->height }} cm<br>
            </p>
            <div class="mt-6 text-center">
                <a href="/riders" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white py-2 px-6 rounded-full inline-block hover:shadow-lg hover:bg-gradient-to-l transition duration-200 ease-in-out">
                    Vrátit zpět
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="inline w-4 h-4 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Race Results Section -->
<div class="flex justify-center items-center mt-10">
    <h4 class="text-2xl font-semibold text-gray-900">Výsledky závodů</h4>
</div>

<div class="overflow-x-auto mt-6">
    <table class="min-w-full bg-white shadow-lg rounded-lg">
        <thead class="bg-gradient-to-r from-purple-500 to-pink-500 text-white">
            <tr>
                <th class="text-left py-3 px-6 uppercase font-semibold text-sm">Číslo Etapy</th>
                <th class="text-left py-3 px-6 uppercase font-semibold text-sm">Datum</th>
                <th class="text-left py-3 px-6 uppercase font-semibold text-sm">Vzdálenost</th>
                <th class="text-left py-3 px-6 uppercase font-semibold text-sm">Název závodu</th>
                <th class="text-left py-3 px-6 uppercase font-semibold text-sm">Pozice</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach($stagesData as $stage)
                <tr class="border-b hover:bg-gray-100 transition duration-200 ease-in-out">
                    <td class="py-3 px-6">{{ $stage->stage_number }}</td>
                    <td class="py-3 px-6">{{ $stage->date }}</td>
                    <td class="py-3 px-6">{{ $stage->distance }} km</td>
                    <td class="py-3 px-6">{{ $stage->race_name }}</td>
                    <td class="py-3 px-6">{{ $stage->rank }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-6">
        {{ $stagesData->links() }}
    </div>
</div>

@endsection

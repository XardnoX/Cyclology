@extends('layouts.app2')
@section('content')

<div class="container mx-auto px-4">
    <h1 class="text-4xl font-bold py-6 text-white bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-lg shadow-md text-center mb-10">
        Editace závodu: {{ $race->default_name }}
    </h1>

    <form method="POST" action="/raceupdate/{{ $race->id }}" class="bg-white rounded-lg shadow-lg px-8 pt-6 pb-8 mb-4 border border-gray-200">
        @csrf
        @method('PUT')

        <!-- Název -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="default_name">
                Název:
            </label>
            <input class="bg-gray-50 border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" id="default_name" name="default_name" type="text" value="{{ $race->default_name }}">
        </div>

        <!-- Odkaz -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="link">
                Odkaz:
            </label>
            <input class="bg-gray-50 border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" id="link" name="link" type="text" value="{{ $race->link }}" required>
        </div>

        <!-- Země -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="country">
                Země:
            </label>
            <input class="bg-gray-50 border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" id="country" name="country" type="text" value="{{ $race->country }}" required>
        </div>

        <!-- Typ -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="type">
                Typ:
            </label>
            <input class="bg-gray-50 border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" id="type" name="type" type="text" value="{{ $race->type }}" required>
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-center mt-8">
            <button class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 hover:bg-gradient-to-l text-white font-bold py-3 px-6 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 ease-in-out" type="submit">
                Uložit
            </button>
        </div>
    </form>
</div>

@endsection

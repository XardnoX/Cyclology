<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color:white !important;">
            <br> Vítej uživateli {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <div class="flex flex-col items-center justify-center ">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <br>
                            <div class="alert alert-error">
                                {{ session('error') }}
                            </div>
                        @endif

                        <h1 class="text-3xl py-4 border-b mb-10">Přidání závodu</h1>

                        <form method="POST" enctype="multipart/form-data" action="/dashboard/create" class="bg-base-100 shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
                            @csrf

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="default_name">
                                    Název:
                                </label>
                                <input class="input input-bordered w-full" id="default_name" name="default_name" type="text">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="link">
                                    Odkaz:
                                </label>
                                <input class="input input-bordered w-full" id="link" name="link" type="text" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="country">
                                    Země:
                                </label>
                                <input class="input input-bordered w-full" id="country" name="country" type="text" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
                                    Typ závodu:
                                </label>
                                <input class="input input-bordered w-full" id="type" name="type" type="text" required>
                            </div>

                            <div class="flex items-center justify-between">
                                <button class="btn btn-primary w-full" type="submit">
                                    Potvrdit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br><br>
            </div> 
        </div>
   
</x-app-layout>

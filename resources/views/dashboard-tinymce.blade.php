<x-app-layout>
<x-head.tinymce-config/>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color:white !important;">
          <br> Vítej uživateli {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="py-12">
        
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   
  

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-forms.tinymce-editor/>
            <div class="flex items-center justify-center">
            
          
         


            </div>
        </div>
    </div>
</x-app-layout>
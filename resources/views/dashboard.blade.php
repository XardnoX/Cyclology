<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color:white !important;">
          <br> Vítej uživateli {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
            <div class="flex flex-col items-center justify-center min-h-screen">
            
            <canvas id="myChart"></canvas>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Počet závodů', 'Počet etap', 'Počet cyklistů'],
        datasets: [{
            label: 'Počet řádků v tabulce',
            data: [{{ $raceCount }}, {{ $stageCount }}, {{ $riderCount }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</div>

            </div>
        </div>
    </div>
</x-app-layout>
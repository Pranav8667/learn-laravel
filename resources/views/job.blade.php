<x-layouts>
    <x-slot:heading>Jobs</x-slot:heading>
    {{-- Ep6 Jobs listing  --}}
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} Per Year</p>
</x-layouts>

<x-layouts>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    {{-- Ep6 Jobs listing  --}}
    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    {{-- <h2 class="font-bold text-lg">{{ $job['title'] }}</h2> --}}


    <p>
        This job pays {{ $job->salary }} Per Year
        {{-- This job pays {{ $job['salary'] }} Per Year --}}
    </p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">
            Edit Job
        </x-button>
    </p>
</x-layouts>

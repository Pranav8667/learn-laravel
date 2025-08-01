<x-layouts>
    <x-slot:heading>Jobs Listing</x-slot:heading>

    {{-- day 1 --}}
    {{-- <h1>
        This is the About Page.
    </h1> --}}
    {{-- Ep6 Jobs listing by changing about name to job --}}


    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} Per Year
                </a>
            </li>
        @endforeach
    </ul>
</x-layouts>

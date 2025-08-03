<x-layouts>
    <x-slot:heading>Jobs Listing</x-slot:heading>

    {{-- day 1 --}}
    {{-- <h1>
        This is the About Page.
    </h1> --}}
    {{-- Ep6 Jobs listing by changing about name to job --}}

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer?->name ?? 'Unknown Employer' }}
                </div>

                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
    </div>
</x-layouts>

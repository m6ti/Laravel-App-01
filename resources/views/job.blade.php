<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
        <h2>{{ $job['title'] }}</h2>
        <p>
            This job pays {{ $job['salary'] }} per year.
        </p>
    </ul>
</x-layout>

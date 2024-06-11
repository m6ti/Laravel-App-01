<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
        <h2>{{ $job->title }}</h2>
        <p>
            This job pays {{ $job->salary }} per year.
        </p>
    </ul>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">
            Edit Job
        </x-button>
    </p>
</x-layout>

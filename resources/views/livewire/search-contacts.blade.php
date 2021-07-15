<div class="container mx-auto mt-12">
    <h1 class="mb-12 text-4xl font-semibold text-center text-gray-900">FTP Search Proof of Concept</h1>
    <small class=""><b>Native Database Search Method</b> | Total Records in Database : <b>{{  $total_records }}</b></small>

    <!-- Searchbox debounce.500ms-->
    <div class="w-full p-3 mb-6 bg-white border rounded-lg shadow-xl">

        <input
            wire:model="search"
            type="text"
            placeholder="Search..."
            class="w-full px-4 py-2 bg-gray-100 border rounded-none"
        >
    </div>
    <!-- // Searchbox -->

    <!-- Search Results -->


    @if (!empty($contacts))

    <div class="w-full p-6 mb-10 bg-white border divide-y rounded shadow-xl">

        @if ($contacts->isNotEmpty())

            {{ $contacts->links('livewire.custompagination') }}

            @foreach($contacts as $contact)

                <div class="p-2 mt-1">

                    <h2 class="font-semibold text-gray-900 text-md">{{ $contact->name }}</h2>
                    <p class="text-gray-900 text-md">
                        <i class="fas fa-globe-europe"></i> {{ $contact->country }}
                    </p>
                    <p class="text-gray-900">
                        <i class="fas fa-phone-square-alt"></i> {{ $contact->phone_number }}
                    </p>
                </div>

            @endforeach

        @else
            <p class="text-gray-900">No data found for <em class="font-bold text-blue-800">"{{ $search }}"</em>... please try other keywords !</p>
        @endif

    </div>

    @endif

    <!-- // Search Results -->

    <div class="w-full mt-5 mb-5 text-center">
        <small>&copy; 2021 - FTP Porto Web Labs</small>
    </div>
</div>

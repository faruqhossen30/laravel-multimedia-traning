<div class="px-8 md:px-16 lg:px-32 py-10 md:py-20 bg-gray-100">
    <p class="text-xl">Trusted by over 15,000+ happy customers</p>
    <div class="my-6 flex flex-wrap justify-evenly">

        @foreach ($clients as $client)
            <img src="{{asset('storage/'.$client->thumbnail)}}" alt="asana-logo" class="max-w-88 min-w-40 min-h-8 max-h-10 object-cover flex items-center">
        @endforeach
        {{-- <img src="images/Allianz-Partners-Logo-ITA.png" alt="Allianz-Partners-Logo-ITA" class="w-88 h-10 object-cover">
        <img src="images/amazon logo.png" alt="amazon logo" class="w-88 h-12 object-cover">
        <img src="images/finnair-logo-1.png" alt="finnair-logo-1" class="w-88 h-8 object-cover">
        <img src="images/samsung logo.png" alt="samsung logo" class="w-40 h-10 object-cover"> --}}
    </div>
</div>

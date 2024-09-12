<div class="px-8 md:px-16 lg:px-32 py-10 md:py-20">
    <div>
        <h3 class="text-4xl font-medium my-4">Marketing Features</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem quidem, odio inventore
            expedita doloribus
            iusto eaque maxime itaque, quaerat ex nulla.</p>
    </div>
    <div class="my-8 grid grid-cols-3 gap-4">

        @foreach ($features as $feature)
            <div class="border-2 shadow-md rounded-md p-6 col-span-3 md:col-span-1">
                <div class="w-12 h-12 p-2 bg-primary text-white rounded-md flex items-stretch">
                    <svg class="" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                    </svg>
                </div>
                <h4 class="my-6 text-2xl">{{$feature->title}}</h4>
                <p>{!! $feature->description !!}</p>
            </div>
        @endforeach

    </div>
</div>

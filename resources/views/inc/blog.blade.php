<div class="px-8 md:px-16 lg:px-32 py-10 md:py-20 bg-gray-100">
    <h3 class="text-3xl font-semibold my-4">Our Latest Articles</h3>
    <p class="my-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae accusantium dicta atque
        delectus quaerat
        voluptates, maxime.</p>
    <div class="grid grid-cols-3 gap-4">

        @foreach ( $blogs as $blog )

        <div class="rounded-md shadow-lg border-2 col-span-3 md:col-span-1">
            <img src="{{asset('storage/'.$blog->thumbnail)}}" alt="blog-1" class="h-56 w-full object-cover">
            <div class="m-4 flex justify-between">
                <div class="h-6">
                    <svg class="w-6 h-5 inline align-top" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                </div>
                <div class="text-center">
                    <svg class="w-6 h-5 inline align-top" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    <span>255</span>
                </div>
            </div>
            <h4 class="m-4 text-2xl">{{$blog->title}}</h4>
            <p class="mx-4 my-4 mb-6">{{$blog->short_description}}</p>
        </div>
        @endforeach
        {{-- <div class="rounded-md shadow-lg border-2 col-span-3 md:col-span-1">
            <img src="images/blog-2.jpg" alt="blog-2" class="h-56 w-full object-cover">
            <div class="m-4 flex justify-between">
                <div class="h-6">
                    <svg class="w-6 h-5 inline align-top" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>Sep 5, 2021</span>
                </div>
                <div class="text-center">
                    <svg class="w-6 h-5 inline align-top" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    <span>199</span>
                </div>
            </div>
            <h4 class="m-4 text-2xl">Develop marketing</h4>
            <p class="mx-4 my-4 mb-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi laudantium
                eveniet est optio accusantium maxime repudiandae. Maiores qui molestias itaque quasi error.</p>
        </div>
        <div class="rounded-md shadow-lg border-2 col-span-3 md:col-span-1">
            <img src="images/blog-3.jpg" alt="blog-3" class="h-56 w-full object-cover">
            <div class="m-4 flex justify-between">
                <div class="h-6">
                    <svg class="w-6 h-5 inline align-top" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>Jun 24, 2021</span>
                </div>
                <div class="text-center">
                    <svg class="w-6 h-5 inline align-top" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    <span>158</span>
                </div>
            </div>
            <h4 class="m-4 text-2xl">Email analytics</h4>
            <p class="mx-4 my-4 mb-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi laudantium
                eveniet est optio accusantium maxime repudiandae. Maiores qui molestias itaque quasi error.</p>
        </div> --}}
    </div>
</div>

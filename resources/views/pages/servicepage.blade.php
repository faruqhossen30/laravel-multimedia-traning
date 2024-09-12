@extends('layouts.app')
@section('content')
    <!-- Service Slide ber Start -->
    <div class="px-8 md:px-16 lg:px-32 py-10 grid grid-cols-12 gap-x-5">
        <div class=" hidden md:block col-span-3 border rounded-md">
            <ul class="divide-y-2">
                <li>
                    <h2 class="font-semibold text-2xl p-2 border">All Category</h2>
                </li>
                @foreach ($categories as $category)
                    <li class="p-2"><a href="{{route('servicepage',['category'=>$category])}}">{{ $category->name }}</a></li>
                @endforeach

            </ul>
        </div>
        <div class="md:col-span-9 col-span-12 grid grid-cols-12 gap-4">


            @foreach ($services as  $service )
            <div class=" col-span-12 sm:col-span-6 md:col-span-4">


                <a class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg transition dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]"
                    href="#">
                    <div class=" overflow-hidden"><img
                            class="w-full h-48 object-fill group-hover:scale-105 transition-transform duration-500 ease-in-out"
                            src="{{asset('storage/'.$service->thumbnail)}}" alt="Image Description"></div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-gray-400 py-3">{{$service->title}}</h3>
                        <div class="text-center">
                            <div class="flex space-x-1 justify-center"></div>
                            <p class="text-sm py-2 text-gray-800 dark:text-gray-400"><span class="font-bold">4.6</span>
                                /5 - from 12k reviews</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 border-t sm:px-5 dark:border-gray-700"><span
                            class="font-bold text-gray-800 dark:text-gray-400">Start ${{$service->price}}</span><button type="button"
                            class="py-2 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-gray-200 font-semibold text-gray-500 hover:text-white hover:bg-gray-500 hover:border-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-offset-2 transition-all text-sm  dark:hover:bg-gray-600 dark:border-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-600 dark:focus:ring-offset-gray-800">Order
                            Now !</button></div>
                </a>
            </div>
            @endforeach

        </div>
    </div>

    <!-- Service Slide ber end -->
@endsection

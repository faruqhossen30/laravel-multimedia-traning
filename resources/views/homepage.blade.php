@extends('layouts.app')

@section('content')
    <!--Header Section Start-->
    <div class="bg-gray-100">
        <div class="px-8 md:px-16 lg:px-32">
          @include('inc.heroarea')
        </div>
    </div>
    <!--Header Section End-->
    <!-- Marketing Features Section Start  -->
    @include('inc.feature')
    <!-- Marketing Features Section End -->
    <!--Happy Client Section Start-->
    @include('inc.client')
    <!-- Happy Client Section End -->
    <!-- Why should you trust us? -->
    @include('inc.whyshould')
    <!-- Why should you trust us? End -->
    <!-- Our Latest Articles -->
    @include('inc.blog')
    <!-- Our Latest Articles -->
    <!-- Choose your plan -->
    @include('inc.testmonial')
    <!-- Choose your plan End -->
    <!-- What our clients think -->
    @include('inc.clientthink')
    <!-- What our clients think -->
    <!--  Subscribe to our newsletter -->
    @include('inc.subscribe')
    <!--  Subscribe to our newsletter -->
@endsection

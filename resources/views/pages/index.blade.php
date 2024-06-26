@extends('base.base')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-8/12 px-4 mb-8">
                <h1 class="text-3xl font-bold mb-4">Welcome to Our Website!</h1>
                <p class="mb-4">This is the homepage of our awesome website. Feel free to explore and discover.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget nisi sed est dignissim vehicula.
                Donec facilisis pellentesque magna non feugiat. Vestibulum sit amet accumsan ipsum.</p>
            </div>
            <div class="w-full md:w-4/12 px-4">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="text-lg font-semibold mb-2">Featured</div>
                    <div class="mb-4">
                        <h5 class="text-xl font-bold mb-2">Special Item</h5>
                        <p class="mb-2">This is a special item that we want to highlight.</p>
                        <a href="https://www.facebook.com/jonathan.ruba" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Custom CSS styles can go here if needed */
    </style>
@endsection

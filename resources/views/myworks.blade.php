<!-- resources/views/my-works.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('My Works') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="mb-4 text-sm font-medium text-green-600">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    <div class="space-y-6">
                        @foreach($works as $item)
                        <div class="post">
                            <h3 class="post-title">{{$item->name}}</h3>
                            <img src="{{$item->image}}}}" alt="Project 1" class="post-image">
                            <p class="post-content">{{$item->description}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
body {
    font-family: 'Figtree', sans-serif;
    background-color: #f8fafc;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.header, .footer {
    background-color: #2a3051;
    color: #ffffff;
    text-align: center;
    padding: 1rem;
}

.footer p {
    font-size: 1rem;
    color: #ffffff;
}

.footer a {
    color: #ff9800;
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
}

.navigation {
    background-color: #2a3051;
    padding: 1rem;
    border-bottom: 1px solid #e7e7e7;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navigation a {
    color: #ffffff;
    text-decoration: none;
    padding: 0 1rem;
    font-weight: 500;
}

.navigation a:hover {
    color: #ff9800;
}

.settings-dropdown {
    margin-left: auto;
    display: flex;
    align-items: center;
}

.settings-dropdown button {
    display: flex;
    align-items: center;
    padding: 0.5rem 1rem;
    border: none;
    background: none;
    font-size: 1rem;
    color: #ffffff;
    cursor: pointer;
}

.settings-dropdown svg {
    margin-left: 0.5rem;
    fill: #ffffff;
}

.content {
    max-width: 80rem;
    margin: 2rem auto;
    padding: 2rem;
    background-color: #ffffff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    border-radius: 0.5rem;
}

.post {
    border-bottom: 1px solid #e7e7e7;
    padding-bottom: 1.5rem;
    margin-bottom: 1.5rem;
}

.post-title {
    font-size: 1.75rem;
    font-weight: bold;
    margin-bottom: 1rem;
    text-align: center;
}

.post-meta {
    text-align: center;
    font-size: 0.875rem;
    color: #6b7280;
    margin-bottom: 1rem;
}

.post-content {
    font-size: 1rem;
    color: #4a5568;
    margin-bottom: 1rem;
    text-align: center;
}

.post-image {
    max-width: 400px;
    width: 100%;
    height: auto;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: block;
    margin: 1rem auto;
}

</style>
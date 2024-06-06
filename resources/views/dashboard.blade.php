<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Posts page') }}
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
                    @if (session('error'))
                        <div class="mb-4 text-sm font-medium text-red-600">
                            <strong>{{ session('error') }}</strong>
                        </div>
                        @endif

                    <div class="space-y-6">
                        @foreach ($Posts as $post)
                            <div class="post-container border-b border-gray-200 pb-6 mb-6">
                                <h4 class="text-2xl font-bold text-center mb-4">{{ $post->title }}</h4>
                                <center><p><strong>Author:</strong> {{$post->user->name}}</p></center>
                                <center><p><strong>Posted on:</strong> {{ $post->created_at->format('F j, Y') }}</p></center>
                                <div class="flex flex-col md:flex-row">
                                    <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-4">
                                        @if ($post->image)
                                            <center><img src="{{ $post->image }}" alt="{{ $post->title }}" class="post-image rounded-lg shadow-md"></center>
                                        @endif
                                    </div>
                                    <div class="md:w-2/3 pl-0 md:pl-6">
                                        <div class="overflow-hidden text-ellipsis" style="height: auto;">
                                            <center><p class="text-gray-700 mb-4">{{ $post->content }}</p></center>
                                        </div>
                                        <div class="flex justify-center space-x-4">
                                            <div class="edit-button">
                                                <a href="{{ route('Post.edit', $post->id) }}">Edit</a>
                                            </div>
                                            <div class="delete-button">
                                                <form action="{{ route('Post.destroy', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- You can place these styles in your main CSS file or within a <style> tag -->
<style>
    .post-container {
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        background-color: #f9fafb;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .post-container:hover {
        background-color: #f3f4f6;
    }

    .edit-button a,
    .delete-button form {
        display: inline-block;
        margin: 0;
    }

    .edit-button a,
    .delete-button button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 500;
        line-height: 1.25rem;
        text-decoration: none;
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        cursor: pointer;
    }

    .edit-button a {
        border: 1px solid #3b82f6;
        color: #3b82f6;
        background-color: #ffffff;
    }

    .edit-button a:hover {
        background-color: #dbeafe;
        border-color: #3b82f6;
        color: #2563eb;
    }

    .delete-button button {
        border: 1px solid #ef4444;
        color: #ef4444;
        background-color: #ffffff;
    }

    .delete-button button:hover {
        background-color: #fee2e2;
        border-color: #ef4444;
        color: #b91c1c;
    }

    .post-image {
        width: 100%;
        height: auto;
        max-width: 400px;
        object-fit: cover;
    }

    .max-w-7xl {
        max-width: 80rem;
    }
    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }
    .bg-white {
        background-color: #ffffff;
    }
    .overflow-hidden {
        overflow: hidden;
    }
    .shadow-sm {
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }
    .sm\:rounded-lg {
        border-radius: 0.5rem;
    }
    .p-6 {
        padding: 1.5rem;
    }
    .text-gray-900 {
        color: #1a202c;
    }
    .mb-4 {
        margin-bottom: 1rem;
    }
    .text-2xl {
        font-size: 1.5rem;
    }
    .font-bold {
        font-weight: 700;
    }
    .text-gray-700 {
        color: #4a5568;
    }
    .text-blue-500 {
        color: #3b82f6;
    }
    .hover\:text-blue-700:hover {
        color: #1d4ed8;
    }
    .font-medium {
        font-weight: 500;
    }
    .border-b {
        border-bottom-width: 1px;
    }
    .border-gray-200 {
        border-color: #e5e7eb;
    }
    .pb-6 {
        padding-bottom: 1.5rem;
    }
    .mb-6 {
        margin-bottom: 1.5rem;
    }
    .flex {
        display: flex;
    }
    .w-1/3 {
        width: 33.333333%;
    }
    .w-2/3 {
        width: 66.666667%;
    }
    .pl-6 {
        padding-left: 1.5rem;
    }
    .rounded-lg {
        border-radius: 0.5rem;
    }
    .shadow-md {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .text-center {
        text-align: center;
    }
</style>

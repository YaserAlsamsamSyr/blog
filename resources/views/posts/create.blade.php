
<!-- Include this in your CSS file or within a <style> tag -->
<style>

    .max-w-2xl {    
        max-width: 42rem;
    }
    .mt-10 {
        margin-top: 2.5rem;
    }
    .bg-white {
        background-color: #fff;
    }
    .shadow-md {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .rounded-lg {
        border-radius: 0.5rem;
    }
    .p-6 {
        padding: 1.5rem;
    }
    .text-2xl {
        font-size: 1.5rem;
    }
    .font-semibold {
        font-weight: 600;
    }
    .mb-5 {
        margin-bottom: 1.25rem;
    }
    .mb-4 {
        margin-bottom: 1rem;
    }
    .block {
        display: block;
    }
    .text-sm {
        font-size: 0.875rem;
    }
    .font-medium {
        font-weight: 500;
    }
    .text-gray-700 {
        color: #4a5568;
    }
    .mt-1 {
        margin-top: 0.25rem;
    }
    .w-full {
        width: 100%;
    }
    .border {
        border-width: 1px;
    }
    .border-gray-300 {
        border-color: #d2d6dc;
    }
    .rounded-md {
        border-radius: 0.375rem;
    }
    .shadow-sm {
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }
    .focus\:ring-indigo-500:focus {
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.5);
    }
    .focus\:border-indigo-500:focus {
        border-color: #6366f1;
    }
    .sm\:text-sm {
        font-size: 0.875rem;
    }
    .text-right {
        text-align: right;
    }
    .inline-flex {
        display: inline-flex;
    }
    .justify-center {
        justify-content: center;
    }
    .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    .border-transparent {
        border-color: transparent;
    }
    .shadow-sm {
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }
    .text-white {
        color: #fff;
    }
    .bg-blue-600 {
        background-color: #2563eb;
    }
    .hover\:bg-blue-700:hover {
        background-color: #1d4ed8;
    }
    .focus\:outline-none:focus {
        outline: 0;
    }
    .focus\:ring-2:focus {
        box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5);
    }
    .focus\:ring-offset-2:focus {
        box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
    }
    .focus\:ring-indigo-500:focus {
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.5);
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="max-w-2xl mx-auto">
                    <form action="{{ route('Post.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
    </div>

    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <textarea name="content" id="content" rows="5" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
    </div>

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
        <input type="url" name="image" id="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div class="text-right">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


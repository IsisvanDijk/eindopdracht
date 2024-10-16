<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $book->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 myflex">
                    <img src="{{ $book->image }}">

                    <ul class="width">
                        <li> > {{ $book->author }} </li>
                        <li> > {{ $book->genre->name }} </li>
                        <li> > {{ $book->age_category }} </li>
                        <li> > {{ $book->description }} </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    @auth()
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('books.destroy') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>

                </div>
            </div>
        </div>
    @endauth
</x-app-layout>

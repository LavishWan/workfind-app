<x-layouts>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form action="/jobs/{{ $job->id }}" method="POST">
        @csrf
        @method('PATCH')


        <div class="w-full max-w-m">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="title" type="text" name="title" placeholder="Programming"
                        value="{{$job->title}}"
                        >

                    @error('title')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="salary">
                        Salary
                    </label>
                    <input required
                        class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="salary" type="text" name="salary" placeholder="GHC 50,000"
                        value="{{$job->salary}}"
                        >

                    @error('salary')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror


                </div>
                <div class="flex mt-6 items-center justify-between gap-x-6">

                    <div class="flex items-center">
                        <button  form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
                    </div>

                    <div class="flex items-center justify-end gap-x-6">
                        <a href="/jobs/{{$job->id}}"
                        class="flex border-transparent border-4 text-black-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                        type="button">
                        Cancel
                        </a>

                        <div>
                            <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            <input type="submit" value="Update">
                            </button>
                        </div>
                        
                    </div>
                </div>
            </form>

        </div>

    </form>

    <form action="/jobs/{{$job->id}}" method="POST" class="hidden" id="delete-form">
        @csrf
        @method('DELETE');
    </form>



</x-layouts>

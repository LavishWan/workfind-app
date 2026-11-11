<x-layouts>
    
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form action="/jobs" method="POST">
        @csrf

        <h2>Create a New Job</h2>
        <p>We just a handful of details from you</p><br>


        <div class="w-full max-w-s">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <x-form-field >
                    <x-form-label for="title" >Title</x-form-label>

                    <x-form-input name="title" id="title" placeholder="Programmer" required />

                    <x-form-error name="title" />

                </x-form-field>
                <x-form-field >
                    <x-form-label for="salary" >Salary</x-form-label>

                    <x-form-input name="salary" id="salary" placeholder="GHC 50,000" required />
                    
                     <x-form-error name="salary" />
                   


                </x-form-field>
                <div class="flex items-center justify-end">

                    <a href="/jobs">
                        <button
                        class="flex border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                        type="button">
                        Cancel
                        </button>
                    </a>
                    
                    <x-form-button>
                        Save
                    </x-form-button>

                    

                </div>
            </form>

        </div>





    </form>



</x-layouts>

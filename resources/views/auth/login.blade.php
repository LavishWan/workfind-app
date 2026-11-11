<x-layouts>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form action="/login" method="POST">
        @csrf

        <div class="w-full max-w-s">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                
                
                <x-form-field >
                    <x-form-label for="email" >Email </x-form-label>

                    <x-form-input name="email" id="email" placeholder="example@gmail.com" :value="old('email')" required />
                    
                     <x-form-error name="email" />
                   
                </x-form-field >
                <x-form-field >
                    <x-form-label for="password" >Password </x-form-label>

                    <x-form-input name="password" id="password" placeholder="Guy@?for$me" required /> 
                    
                     <x-form-error name="password" />
                   
                </x-form-field >
                

                <div class="flex items-center justify-end">
                    <a href="/jobs">
                        <a href="/"
                        class="flex border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                        type="button">
                        Cancel
                        </a>
                    </a>
                    
                    <x-form-button>
                        Log In
                    </x-form-button>
                </div>
            </form>
        </div>
    </form>
</x-layouts>

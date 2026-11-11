<x-layouts>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form action="/register" method="POST">
        @csrf

        <div class="w-full max-w-s">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <x-form-field >
                    <x-form-label for="first_name" >First Name</x-form-label>

                    <x-form-input name="first_name" id="first_name" placeholder="John" required />

                    <x-form-error name="first_name" />

                </x-form-field >
                <x-form-field >
                    <x-form-label for="last_name" >Last Name</x-form-label>

                    <x-form-input name="last_name" id="last_name" placeholder="Ekor" required />
                    
                     <x-form-error name="last_name" />
                   
                </x-form-field >
                <x-form-field >
                    <x-form-label for="email" >Email </x-form-label>

                    <x-form-input name="email" id="email" placeholder="example@gmail.com" required />
                    
                     <x-form-error name="email" />
                   
                </x-form-field >
                <x-form-field >
                    <x-form-label for="password" >Password </x-form-label>

                    <x-form-input name="password" id="password" placeholder="Guy@?for$me" required /> 
                    
                     <x-form-error name="password" />
                   
                </x-form-field >
                <x-form-field >
                    <x-form-label for="password_confirmation" >Confirm Password </x-form-label>

                    <x-form-input name="password_confirmation" id="password_confirmation" placeholder="Guy@?for$me" required />
                    
                     <x-form-error name="password_confirmation" />
                   
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
                        Register
                    </x-form-button>
                </div>
            </form>
        </div>
    </form>
</x-layouts>

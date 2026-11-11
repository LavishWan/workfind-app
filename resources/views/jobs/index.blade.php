<x-layouts>
    <x-slot:heading>
        Jobs|Listing
    </x-slot:heading>


    <div class="space-y-4">
        @foreach ($jobs as $job)
            
            <a href="/jobs/{{$job['id']}}" class='block px-4m py-6 border border-gray-200 rounderd-lg'>

                <div class="font-bold text-blue-500 text-50"> {{$job->employer->name}} </div>

                <div>
                    <strong>{{ $job['title'] }}</strong>: Pays {{$job['salary']}} per year
                </div>
            
            </a>
           
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>    
</x-layouts>
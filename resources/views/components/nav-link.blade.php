@props(['active' => 'false'])

<a class="{{ $active ? 'rounded-md bg-gray-950/50 px-3 py-2 text-sm font-medium text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white " aria-current=" class="{{ $active ? 'page' : 'false' }}" 
    {{ $attributes }}
    
    > {{ $slot }} </a>
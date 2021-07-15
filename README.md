## Laravel 8.x Livewire with Pagination Database Search 
`Speed Proof of Concept`

## About

Tiny project with Laravel + Livewire with Pagination database record search test, to see how livewire/laravel deals with <code>1.000.000</code> database records search. This is made for all type of hosting, shared ou dedicated and you can change DB engine in the .env file, default is <code>MySQL</code>.
No optimizations were made in database/code level, try only raw and clear laravel way. 

## Instructions

- Need to run database migration with seed <code>php artisan migrate:fresh --seed</code>
note: if you ran with PHP memory allowed error, please use before the seeder call <code>ini_set('memory_limit', -1);</code>, in somecase you need also this code  to run the seeder faster <code>DB::disableQueryLog();</code>, but warning it still is a slow process to create faker for 1k records.

- If you need to slow down the input change latence of the input box, you may change this to the livewire component on blade search-contacts.blade.php : <code>wire:model.debounce.1000ms="search"</code> or in seconds <code>wire:model.debounce.1s="search"</code>

## Future

- For better results, I could add in the future other search technologies like : algolia, elastic-search, scout, etc....

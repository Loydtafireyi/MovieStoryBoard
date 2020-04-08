<?php

namespace App\Http\Livewire;

use Http;
use Livewire\Component;

class SearchDropdown extends Component
{
	public $search = '';


    public function render()
    {
    	$searchResults = [];

    	if(strlen($this->search) > 2) {
    		$searchResults = Http::withToken(env('MOVIE_DB_TOKEN'))->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)->json()['results'];
    	}

        return view('livewire.search-dropdown', compact('searchResults'));
    }
}

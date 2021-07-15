<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class SearchContacts extends Component
{

    use WithPagination;

    public $search;
    public $nrecords;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
        $this->nrecords = Contact::count();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $results = [];

        if ($this->search != "") {
            $results = Contact::select('id','name','country','phone_number')
                                ->where('name', 'like', '%'.$this->search.'%')
                                ->orWhere('country', 'like', '%'.$this->search.'%')
                                ->paginate(6);
        }

        return view('livewire.search-contacts', [
            'contacts' => $results,
            'total_records' => number_format($this->nrecords,0,'.','.'),
            'search' => $this->search
        ]);
    }
}

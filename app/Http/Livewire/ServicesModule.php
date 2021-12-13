<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User; 
use App\Models\Products; 
use App\Models\Orders;
use Auth; 

class ServicesModule extends Component
{
    use WithPagination;

    public $user_id=null;
    
    public function render()
    {
        $this->user_id=Auth::user()->id; 

        $user=User::find($this->user_id); 

        // $services=User::find($this->user_id)->orders();
        $services=$user->orders();

        $categories=Orders::find(1)->categories;

        // dd($categories);
    
        return view('livewire.services-module',['services'=>$services->paginate(5), 'categories'=>$categories]);
    }

    

}

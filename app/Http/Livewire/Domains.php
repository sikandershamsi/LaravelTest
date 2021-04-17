<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Domain;
use App\Models\User;
  
class Domains extends Component
{
    public $domains, $domain, $domain_id, $user_id, $users;
    public $updateMode = false;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $query = Domain::query()->select('domains.id','domains.domain as domain_url','users.name');
		$query->leftJoin('users', 'domains.user_id', '=', 'users.id');
		$query->orderBy('id','DESC');
		$this->domains = $query->get();
		$this->users = User::where('role','admin')->get();
		
        return view('livewire.domains');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->domain = '';
        $this->user_id = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'domain' => 'string|required',
            'user_id' => 'required'
        ]);
  
  		$Domain = new Domain;
		$Domain->domain = $this->domain;
		$Domain->user_id = $this->user_id;
		$Domain->save();
		
        session()->flash('message', 'Domain Created Successfully.');
  
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $domain = Domain::findOrFail($id);
        $this->domain_id = $id;
        $this->domain = $domain->domain;
        $this->user_id = $domain->user_id;
  
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'domain' => 'required',
            'user_id' => 'required'
        ]);
  
        $domain = Domain::find($this->domain_id);
       
		$domain->domain = $this->domain;
		$domain->user_id = $this->user_id;
		$domain->save();
  
        $this->updateMode = false;
  
        session()->flash('message', 'Domain Updated Successfully.');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Domain::find($id)->delete();
        session()->flash('message', 'Domain Deleted Successfully.');
    }
}

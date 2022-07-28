<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;


class Customers extends Component
{
    use WithPagination;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $CompanyName;
    public $ContactName;
    public $ContactTitle;
    public $Address;
    public $City;
    public $Phone;
    public $mobile;
    public $Email;
    public $WebSite;
    public $DiscountType;
    public $Logo;
    public $Note;
    public $CurrentOrder;

    /**
     * The validation rules
     *
     * @return void
     */
    public function rules()
    {
        return [
            'ContactName' => 'required',
            'mobile' => 'required',
            'Email' => 'required',
        ];
    }

    /**
     * The livewire mount function
     *
     * @return void
     */
    public function mount()
    {
        // Resets the pagination after reloading the page
        $this->resetPage();
    }

    /**
     * The create function.
     *
     * @return void
     */
 /**
     * The create function.
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        Customer::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();

        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'New Page',
            'eventMessage' => 'Another page has been created!',
        ]);
    }

 /**
     * The read function.
     *
     * @return void
     */
    public function read()
    {
        return Customer::paginate(5);
    }

    /**
     * The update function.
     *
     * @return void
     */

 /**
     * Shows the form modal
     * of the create function.
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }

     /**
     * The data for the model mapped
     * in this component.
     *
     * @return void
     */
    public function modelData()
    {
        return [
           
            'CompanyName'=> $this->CompanyName,
            'ContactName'=> $this->ContactName,
            'ContactTitle'=> $this->ContactTitle,
            'Address'=> $this->Address,
            'City'=> $this->City,
            'Phone'=> $this->Phone,
            'mobile'=> $this->mobile,
            'Email'=> $this->Email,
            'WebSite'=> $this->WebSite,
            'DiscountType'=> $this->DiscountType,
            'Logo'=> $this->Logo,
            'Note'=> $this->Note,
            'CurrentOrder'=> $this->CurrentOrder,


        ];
    }

    /** 
 
     * Dispatch event
     *
     * @return void
     */
    public function dispatchEvent()
    {
        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'Sample Event',
            'eventMessage' => 'You have a sample event notification!',
        ]);
    }

    /**
     * The livewire render function.
     *
     * @return void
     */
  
    public function render()
    {
        return view('livewire.customers', [
            'data' => $this->read(),
        ]);
    }
}

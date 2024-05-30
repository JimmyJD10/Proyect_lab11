<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Contact;

class ContactCard extends Component
{
    public $contact;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-card');
    }
}

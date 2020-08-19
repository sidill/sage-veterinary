<?php

namespace App\Http\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $notify_via;

    public function mount()
    {
        $user = auth()->user();

        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->notify_via = $user->notify_via ?? ['mail'];
    }

    public function save()
    {
        /** @var \App\User */
        $user = auth()->user();

        $this->validate([
            'name' => ['required', 'string'],
            'email' => ['required', Rule::unique('users')->ignore($user->id)],
            'phone' => ['nullable', 'starts_with:0', 'digits:10', Rule::unique('users')->ignore($user->id)],
            'notify_via' => ['required', 'array'],
            'notify_via.*' => ['in:database,mail,sms'],
        ]);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'notify_via' => $this->notify_via,
        ]);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

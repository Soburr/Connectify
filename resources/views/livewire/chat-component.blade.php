<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $message = '';
    public array $messages = [];

    public function sendMessage() {
       // dispatch a message
       MessengerEvent::dispatch(Auth::user()->name, $this->message);

       $this->message = '';
    }

    public function onMessageEvent() {
        // listen for a message
    }
}; ?>

<div>
   <x-chat-dialogue :messages="$this->messages" toMethod="sendMessage" color="blue" name="Chat"/>
</div>

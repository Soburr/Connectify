<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $message = '';
    public array $messages = [];

    public function sendMessage() {
       // dispatch a message
    }

    public function onMessageEvent() {
        // listen for a message
    }
}; ?>

<div>

</div>

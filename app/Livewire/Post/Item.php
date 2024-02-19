<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Item extends Component
{
    public $post, $comments;
    public function render()
    {
        return view('livewire.post.item');
    }
}

<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class BlogPostItem extends Entity {
    protected $attributes = [
        'id' => null,
        'title' => null,
        'created_at' => null,
        'edited_at' => null,
        'short_description' => null,
        'body' => null
    ];
}
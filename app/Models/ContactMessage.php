<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['name', 'whatsapp', 'email', 'subject', 'message', 'is_read'];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return ['is_read' => 'boolean'];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_number',
        'name',
        'email',
        'age',
        'message',
        'subject',
        'event',
        'event_date',
        'event_time',
        'djs',
        'location',
        'payment_status',
        'admin_reply',
        'payment_method'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ticket) {
            if ($ticket->subject === 'Ticket' && empty($ticket->ticket_number)) {
                $ticket->ticket_number = 'TICKET-' . strtoupper(uniqid());
            }
        });
    }
}

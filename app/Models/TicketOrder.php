<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketOrder extends Model
{
    use HasFactory;

    protected $table = "ticketorders";  

    public function OrderLines()
    {
        return $this->hasMany(OrderLine::class);
    }
}

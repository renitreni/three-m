<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "appoint_date",
        "car_model",
        "branch",
        "service",
        "email",
        "contact_no",
        "remarks",
        "code",
    ];
}

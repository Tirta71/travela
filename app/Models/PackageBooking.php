<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageBooking extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'package_tour_id',
        'user_id',
        'start_date',
        'end_date',
        'proof',
        'total_amount',
        'quantity',
        'sub_total',
        'insurance',
        'tax',
        'is_paid'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function customer (){
        return $this->belongsTo(User::class);
    }

    public function tour(){
        return $this->belongsTo(PackageTour::class);
    }

    public function bank(){
        return $this->belongsTo(PackageBank::class);
    }
}

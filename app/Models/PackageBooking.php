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
        'is_paid',
        'package_bank_id'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function customer (){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tour(){
        return $this->belongsTo(PackageTour::class, 'package_tour_id');
    }

    public function bank(){
        return $this->belongsTo(PackageBank::class, 'package_bank_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetService extends Model
{
    use HasFactory;
    protected $fillable = ["petId", "serviceTypeId", "date", "Status"];
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'petId');
    }

    public function serviceType()
    {
        return $this->belongsTo(TypeOfService::class, 'serviceTypeId');
    }
}

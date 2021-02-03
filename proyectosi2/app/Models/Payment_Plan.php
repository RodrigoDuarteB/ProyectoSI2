<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Utils;

class Payment_Plan extends Model{
    use HasFactory;
    protected $table = 'payment_plans';
    protected $fillable = ['name', 'price'];
    public $timestamps = false;

    public function subscription(){
        return $this->hasOne(Subscription::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model{
    use HasFactory;
    protected $table = 'subscriptions';
    protected $fillable = ['initial_date', 'final_date', 'status', 'company_id', 'payment_plan_id'];
    public $timestamps = false;

    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function payment_plan(){
        return $this->belongsTo(Payment_Plan::class, 'payment_plan_id');
    }
}

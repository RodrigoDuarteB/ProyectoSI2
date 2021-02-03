<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['name', 'email', 'phone', 'country', 'company_id'];
    public $timestamps = false;

    public function user(){
        return $this->hasOne(User::class);
    }

    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }
}

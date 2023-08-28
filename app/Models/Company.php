<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'address',
    ];
    public function setnameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = ucwords($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->formatLocalized('%d-%B-%Y');
    }
}
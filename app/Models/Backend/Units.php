<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Units extends Model
{
    use HasFactory;
    protected $fillable = ['name','short_name','status','created_by'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
   
}

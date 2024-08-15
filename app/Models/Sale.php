<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $fillable =['id_client', 'id_product','sale_date',];

    public function ClientFunction():BelongsTo{
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function ProductFunction():BelongsTo{
        return $this->belongsTo(Product::class, 'id_product');
    }
}

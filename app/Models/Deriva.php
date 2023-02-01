<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deriva extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'derivado',
        'observaciones',
        'externo_id',
        
    ];
    public function externo(){
        return $this->belongsTo(Externo::class);
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deriva extends Model
{
    use HasFactory;
    protected $fillable=[
        'derivado',
        'observaciones',
        'externo_id',
        
    ];
    public function externo(){
        return $this->belongsTo(Externo::class);
    }
    
}

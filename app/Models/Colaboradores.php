<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    use HasFactory;
    protected $fillable = ['cpf', 'nome', 'email', 'telefone', 'endereco', 'empresa_id'];
    public $timestamps = false;

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

}

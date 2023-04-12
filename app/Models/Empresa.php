<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = ['cnpj', 'nome', 'email', 'telefone', 'endereco', 'created_at', 'updated_at'];
    public $timestamps = false;

    public function colaboradores(){
        return $this->hasMany(Colaboradores::class);
    }
}

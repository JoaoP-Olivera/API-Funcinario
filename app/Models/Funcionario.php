<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';
    protected $fillable = ['nome','email','num_de_telefone','genero','idade'];
    protected $guarded = ['id','criado_em','created_at','updated_at'];
    use HasFactory;
}

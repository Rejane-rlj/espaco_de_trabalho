<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    Schema::create('produtos', function(Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->text('descricao')->nullable();
        $table->string('tamanho')->nullable();
        $table->string('cor')->nullable();
        $table->decimal('preco', 8, 2);
        $table->integer('quantidade');
        $table->string('imagem')->nullable();
        $table->timestamps();
    });
    
    protected $fillable = [
        'nome',
        'descricao',
        'tamanho',
        'cor',
        'preco',
        'quantidade',
        'imagem',
    ];

}
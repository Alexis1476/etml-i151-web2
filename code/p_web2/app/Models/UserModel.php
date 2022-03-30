<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 't_user';
    /**
     * Fonction qui créer la relation entre la table t_book et la table t_user
     * Un utilisateur a plusieurs livre
     * @return
     */
    public function books(){
        return $this->hasMany(BookModel::class);
    }

    // Tableau pour les colonnes de la table qui sont remplissables
    protected $fillable = [
        'idUser',
        'useNickname',
        'usePassword',
        'useCreateAt',
        'useNbBooks',
        'useNbAppreciation',
        'useAdmin'
    ];

    use HasFactory;
}

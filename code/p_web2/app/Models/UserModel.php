<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_user
     * Un utilisateur a plusieurs livre
     * @return
     */
    public function books(){
        return $this->hasMany(BookModel::class, 'idBook');
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

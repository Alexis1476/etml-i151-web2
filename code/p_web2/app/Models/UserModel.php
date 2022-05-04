<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model implements Authenticatable
{
    // Implementer les méthodes de l'interface par défaut
    use \Illuminate\Auth\Authenticatable;

    protected $table = 't_user';
    protected $primaryKey = 'idUser';

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_user
     * Un utilisateur a plusieurs livre
     * @return
     */
    public function books(){
        return $this->hasMany(BookModel::class, 'idBook');
    }

    /**
     * Fonction qui créer la relation entre la table t_appreciate et la table t_user
     * Un livre a plusieurs appreciations
     * @return
     */
    public function appreciations(){
        return $this->hasMany(AppreciateModel::class, 'idUser');
    }

    // Tableau pour les colonnes de la table qui sont remplissables
    public $timestamps = false;
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

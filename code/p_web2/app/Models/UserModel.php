<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Model pour la table t_user
 */

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserModel
 */
class UserModel extends Model implements Authenticatable
{
    // Implementer les méthodes de l'interface par défaut
    use \Illuminate\Auth\Authenticatable;

    /**
     * Nom de la table
     * @var string
     */
    protected $table = 't_user';
    /**
     * Nom de la clé primaire
     * @var string
     */
    protected $primaryKey = 'idUser';
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Récupère le mot de passe pour l'authentification
     * @return mixed|string
     */
    public function getAuthPassword()
    {
        return $this->usePassword;
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_user
     * Un utilisateur a plusieurs livre
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany(BookModel::class, 'idBook');
    }

    /**
     * Fonction qui créer la relation entre la table t_appreciate et la table t_user
     * Un livre a plusieurs appreciations
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appreciations()
    {
        return $this->hasMany(AppreciateModel::class, 'idUser');
    }

    /**
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }

    /**
     * Nom des champs dans la table t_user
     * @var string[]
     */
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

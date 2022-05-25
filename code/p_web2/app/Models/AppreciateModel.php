<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Model pour la table t_appreciate
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppreciateModel
 */
class AppreciateModel extends Model
{
    /**
     * Nom de la table
     * @var string
     */
    protected $table = 't_appreciate';
    /**
     * Nom des clés primaires
     * @var string[]
     */
    /*protected $primaryKey = ['idUser', 'idBook'];*/
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Fonction qui créer la relation entre la table t_appreciate et la table t_user
     * Une appréciation appartient à un utilisateur
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(UserModel::class, 'idUser','idUser');
    }

    /**
     * Fonction qui créer la relation entre la table t_appreciate et la table t_book
     * Une appréciation appartient à un livre
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book(){
        return $this->belongsTo(BookModel::class, 'idBook');
    }

    /**
     * Nom des champs dans la table t_appreciate
     * @var string[]
     */
    protected $fillable = [
        'idBook',
        'idUser',
        'appNote'
    ];

    use HasFactory;
}

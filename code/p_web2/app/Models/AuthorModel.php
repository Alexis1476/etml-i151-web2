<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Model pour la table t_author
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthorModel
 */
class AuthorModel extends Model
{
    /**
     * Nom de la table
     * @var string
     */
    protected $table = 't_author';
    /**
     * Nom de la clé primaire
     * @var string
     */
    protected $primaryKey = 'idAuthor';
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_author
     * Un auteur possède plusieurs livre
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(){
        return $this->hasMany(BookModel::class, 'idBook');
    }

    // Tableau pour les colonnes de la table qui sont remplissables

    /**
     * Nom des champs dans la table t_author
     * @var string[]
     */
    protected $fillable = [
        'idAuthor',
        'autFirstName',
        'autLastName'
    ];

    use HasFactory;
}

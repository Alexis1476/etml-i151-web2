<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Model pour la table t_category
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryModel
 */
class CategoryModel extends Model
{
    /**
     * Nom de la table
     * @var string
     */
    protected $table = 't_category';
    /**
     * Nom de la clé primaire
     * @var string
     */
    protected $primaryKey = 'idCategory';
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_category
     * Une catégorie possède plusieurs livre
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(){
        return $this->hasMany(BookModel::class, 'idBook');
    }

    /**
     * Nom des champs dans la table t_category
     * @var string[]
     */
    protected $fillable = [
        'idCategory',
        'catName'
    ];

    use HasFactory;
}

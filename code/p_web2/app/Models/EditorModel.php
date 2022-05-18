<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Model pour la table t_editor
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EditorModel
 */
class EditorModel extends Model
{
    /**
     * Nom de la table
     * @var string
     */
    protected $table = 't_editor';
    /**
     * Nom de la clé primaire
     * @var string
     */
    protected $primaryKey = 'idEditor';
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_editor
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(){
        return $this->hasMany(BookModel::class, 'idBook');
    }

    /**
     * Nom des champs dans la table t_editor
     * @var string[]
     */
    protected $fillable = [
        'idEditor',
        'ediName'
    ];

    use HasFactory;
}

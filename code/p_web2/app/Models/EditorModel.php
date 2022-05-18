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

class EditorModel extends Model
{
    protected $table = 't_editor';
    protected $primaryKey = 'idEditor';
    public $timestamps = false;
    /**
     * Fonction qui créer la relation entre la table t_book et la table t_editor
     * @return
    */
    public function books(){
        return $this->hasMany(BookModel::class, 'idBook');
    }

    // Tableau pour les colonnes de la table qui sont remplissables
    protected $fillable = [
        'idEditor',
        'ediName'
    ];

    use HasFactory;
}

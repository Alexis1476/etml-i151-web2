<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 't_category';
    protected $primaryKey = 'idCategory';
    public $timestamps = false;
    /**
     * Fonction qui créer la relation entre la table t_book et la table t_category
     * Une catégorie possède plusieurs livre
     * @return
    */
    public function books(){
        return $this->hasMany(BookModel::class, 'idBook');
    }

    // Tableau pour les colonnes de la table qui sont remplissables
    protected $fillable = [
        'idCategory',
        'catName'
    ];

    use HasFactory;
}

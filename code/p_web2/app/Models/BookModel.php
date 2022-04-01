<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    /**
     * Fonction qui créer la relation entre la table t_book et la table t_user
     * Le livre appartient à un utilisateur
     * @return
     */
    public function user(){
        return $this->belongsTo(UserModel::class, 'idUser');
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_category
     * Le livre appartient à une catégorie
     * @return
     */
    public function category(){
        return $this->belongsTo(CategoryModel::class, 'idCategory');
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_editor
     * Le livre appartient à un editeur
     * @return
     */
    public function editor(){
        return $this->belongsTo(EditorModel::class, 'idEditor');
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_author
     * Le livre appartient à un auteur
     * @return
     */
    public function author(){
        return $this->belongsTo(AuthorModel::class, 'idAuthor');
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_appreciate
     * Le livre possède plusieurs appréciations
     * @return
     */
    public function appreciations(){
        return $this->hasMany(AppreciateModel::class, 'idBook');
    }

    // Tableau pour les colonnes de la table qui sont remplissables
    protected $fillable = [
        'idBook',
        'booTitle',
        'booNbPages',
        'booPreview',
        'booResume',
        'booPublishingDate',
        'booNoteAverage',
        'booCoverName',
        'idAuthor',
        'idEditor',
        'idCategory',
        'idUser'
    ];

    use HasFactory;
}

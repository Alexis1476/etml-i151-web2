<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Model pour la table t_book
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BookModel
 */
class BookModel extends Model
{
    /**
     * Nom de la table
     * @var string
     */
    protected $table = 't_book';
    /**
     * Nom de la clé primaire
     * @var string
     */
    protected $primaryKey = 'idBook';
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_user
     * Le livre appartient à un utilisateur
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(UserModel::class, 'idUser');
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_category
     * Le livre appartient à une catégorie
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo(CategoryModel::class, 'idCategory');
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_editor
     * Le livre appartient à un editeur
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function editor(){
        return $this->belongsTo(EditorModel::class, 'idEditor');
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_author
     * Le livre appartient à un auteur
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(){
        return $this->belongsTo(AuthorModel::class, 'idAuthor');
    }

    /**
     * Fonction qui créer la relation entre la table t_book et la table t_appreciate
     * Le livre possède plusieurs appréciations
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appreciations(){
        return $this->hasMany(AppreciateModel::class, 'idBook');
    }


    /**
     * Nom des champs dans la table t_book
     * @var string[]
     */
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

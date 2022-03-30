# Conventions de nommage
> Tout doit être en anglais.

# Table des matières
- [Variables](#1-variables)
- [Fonctions](#2-fonctions)
- [MVC](#3-mvc)
    - [Models](#31-model)
    - [Vues](#32-vues)
    - [Controllers](#33-controller)
- [Laravel](#4-laravel)
    - [Migration](#41-migration)

## 1. Variables
La réglementation pour les variables est la suivante : Le ***lowerCamelCase***.  
> Exemple :
```php
- $userLogin
- $bookName
```
## 2. Fonctions
La réglementation pour les fonctions est la suivante : Le ***lowerCamelCase***
> Exemple :
```php
- displayUser()
- displayBook()
```
## 3. MVC
Les réglementations pour le modèle MVC.

### 3.1 Models
Le nom du model doit obligatoirement commencer par l'élément qu'il concerne suivit du mot **Model**.  
Le nom doit être en ***UpperCamelCase***.
> Exemple :
```php
- UserModel.php
- BookModel.php
```

### 3.2 Vues
Le nom de la vue doit obligatoirement commencer par l'élément qu'elle concerne.  
La vue doit obligatoirement finir par **.blade.php**, de plus le nom doit être en ***lowerCamelCase***.
> Exemple :
```php
- userDetails.blade.php
- bookDetails.blade.php
```

### 3.3 Controllers
Le nom du controller doit obligatoirement commencer par l'élément qu'il concerne suivit du mot **Controller**.  
Le nom doit être en ***UpperCamelCase***.
> Exemple :
```php
- UserController.php
- BookController.php
```

## 4. Laravel
### 4.1 Migration
Le nom des migrations doit être en ***snake_case***.
> Exemple :
```php
- create_user_table
- create_book_table
```
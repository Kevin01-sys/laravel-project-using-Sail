<?php
// command used to create this file -> php artisan make:model Curso
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* The following command line is used to take a specific model from the database
     If nothing is set, the Eloquent rule is automatically used.
     Eloquent's standard for english words -> User (class: initial capital letter - singular) - users (database table: initial lower case - plural) 
    protected $table = "users";*/

    /* following command: use it to create the object with the following properties and ignore the rest 
    protected $fillable = ['name','descripcion','categoria'];*/
    /* following command: we indicate the field that we want to ignore */
    protected $guarded = [];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Etiqueta
 *
 * @property $id
 * @property $etiqueta
 * @property $created_at
 * @property $updated_at
 *
 * @property Tarea[] $tareas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Etiqueta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['etiqueta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tareas()
    {
        return $this->hasMany(\App\Models\Tarea::class, 'id', 'etiqueta');
    }
    
}

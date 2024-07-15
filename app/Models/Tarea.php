<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $etiqueta
 * @property $nombre
 * @property $profesor
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Etiqueta $etiqueta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarea extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['etiqueta', 'nombre', 'profesor', 'descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etiqueta()
    {
        return $this->belongsTo(\App\Models\Etiqueta::class, 'etiqueta', 'id');
    }
    
}

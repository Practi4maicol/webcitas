<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Especialidade
 *
 * @property $id
 * @property $nombre
 * @property $descripción
 * @property $created_at
 * @property $updated_at
 *
 * @property PersonasHasEspecialidade[] $personasHasEspecialidades
 *
 * @property Persona[] $personas
 * @property Cita[] $citas
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Especialidade extends Model
{

    static $rules = [
		'nombre' => 'required',
		'descripción' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripción'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personasHasEspecialidades()
    {
        return $this->hasMany('App\Models\PersonasHasEspecialidade', 'Especialidade_id', 'id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personas()
    {
        return $this->hasMany('App\Models\Persona', 'espeid', 'id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'espeid', 'id');
    }


}

<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Aluno extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $table      = 'alunos';
    protected $primaryKey = 'aluno_email';

    protected $fillable = [
        'aluno_nome',
        'aluno_cpf',
        'aluno_estado',
        'aluno_municipio',
        'aluno_telefone',
        'aluno_email',
        'aluno_senha',
    ];

    protected $hidden = [
        'aluno_senha',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * retorna campo com valor que representa a senha
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->aluno_senha;
    }
}

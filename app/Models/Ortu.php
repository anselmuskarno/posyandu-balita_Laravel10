<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Ortu extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_anak',
        'jenis_kelamin',
        'nama_orangtua',
        'umur_anak',
        'berat0',
        'berat1',
        'berat2',
        'berat3',
        'berat4',
        'berat5',
        'berat6',
        'berat7',
        'berat8',
        'berat9',
        'berat10',
        'berat11',
        'berat12',
        'berat13',
        'berat14',
        'berat15',
        'berat16',
        'berat17',
        'berat18',
        'berat19',
        'berat20',
        'berat21',
        'berat22',
        'berat23',
        'berat24',
        'tinggi0',
        'tinggi1',
        'tinggi2',
        'tinggi3',
        'tinggi4',
        'tinggi5',
        'tinggi6',
        'tinggi7',
        'tinggi8',
        'tinggi9',
        'tinggi10',
        'tinggi11',
        'tinggi12',
        'tinggi13',
        'tinggi14',
        'tinggi15',
        'tinggi16',
        'tinggi17',
        'tinggi18',
        'tinggi19',
        'tinggi20',
        'tinggi21',
        'tinggi22',
        'tinggi23',
        'tinggi24'
    ];
}

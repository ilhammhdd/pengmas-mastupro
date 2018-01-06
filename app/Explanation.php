<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explanation extends Model
{
    protected $table = 'explanations';

    protected $fillable = [
        'id', 'dominan', 'tujuan', 'menilai_orang_dari', 'mempengaruhi_orang_dari', 'sering', 'dibawah_tekanan', 'ketakutan', 'meningkatkan_efektifitas_melalui', 'penjelasan'
    ];
}

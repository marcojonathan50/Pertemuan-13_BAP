<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class replacement extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'replacements';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_lengkap', 'mata_kuliah', 'kelas', 'prodi', 'semester', 'tahun_akademik', 'tanggal', 'jadwal_kuliah', 'tanggal_replacement', 'jam_replacement', 'alasan_replacement'];

    
}

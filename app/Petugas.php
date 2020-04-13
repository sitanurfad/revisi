<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
   
    protected $table ='petugas';
    protected $guarded =['id_petugas'];
    protected $primaryKey ='id_petugas';

	public function User()
	{
		return $this->belongsTo(User::class,'user_id');

	}
	public function tanggapan()

	{
		return $this->belongsTo(Pengaduan::class, 'id_petugas');
	}
}

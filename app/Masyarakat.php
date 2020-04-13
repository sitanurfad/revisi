<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table ='masyarakat';
    protected $guarded =['id_masyarakat'];
    protected $primaryKey ='id_masyarakat';

public function User()
{
	return $this->belongTo(User::class,'user_id');
}
public function pengaduan()
{
	return $this->belongTo(Pengaduan::class, 'id_masyarakat');
}
}

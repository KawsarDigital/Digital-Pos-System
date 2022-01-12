<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_id','first_name','last_name','email','status'
    ];

    public function userGroup(){
        return $this->belongsTo(UserGroup::class,'group_id','id');
    }
}

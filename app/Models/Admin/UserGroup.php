<?php

namespace App\Models\Admin;

use App\Models\Admin\UserList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserGroup extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'status',
    ];

    public function userList(){
        return $this->hasOne(UserList::class);
    }
}

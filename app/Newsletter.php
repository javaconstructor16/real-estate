<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'email', 'status',
    ];
    public function saveEmail($data){
        $this->email = $data['email'];
        $this->status = isset($data['status'])?$data['status']:1;
        $this->save();
        return 1;

    }
}

<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model

{

    use HasFactory;


    protected $table = 'profiles';

    protected $fillable = ['age', 'bio', 'address', 'photo_profile', 'user_id'];


    public function user()

    {

        return $this->belongsTo(User::class);

    }

}

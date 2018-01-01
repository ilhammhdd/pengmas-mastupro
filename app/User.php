<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Crypt;
use App\SiswaAccount;
use App\GuruAccount;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsToMany('App\Role', 'role_users', 'user_id', 'role_id');
    }

    public function siswa()
    {
        return $this->hasOne('App\Siswa');
    }

    public function guru()
    {
        return $this->hasOne('App\Guru');
    }

    public function discGroupJawaban()
    {
        return $this->hasMany('App\DiscGroupJawaban');
    }

    public function siswaAccount()
    {
        return $this->hasOne('App\SiswaAccount', 'user_id', 'id');
    }

    public function guruAccount()
    {
        return $this->hasOne('App\GuruAccount', 'user_id', 'id');
    }

    public function testHistory()
    {
        return $this->hasOne('App\TestHistory', 'user_id', 'id');
    }

    public static function registerNewUserSiswa(Request $request)
    {
        $roleSiswa = Role::where('nama', 'siswa')->first();

        $user = new User();
        $user->username = $request->input('nis');
        $user->password = bcrypt('password');
        $user->remember_token = Crypt::encryptString('remember_this');
        $user->save();
        $user->role()->attach($roleSiswa);

        $siswaAccount = new SiswaAccount();
        $siswaAccount->user()->associate($user);
        $siswaAccount->siswa()->associate($request->input('id'));
        $siswaAccount->save();
    }

    public static function unRegisterUserSiswa(Request $request){
        $siswaAccount = SiswaAccount::where('siswa_id', '=', $request->input('id'))->first();
        $user = User::where('id', '=', $siswaAccount->user_id)->first();
        $user->delete();
    }

      public static function registerNewUserGuru(Request $request)
    {
        $roleGuru = Role::where('nama', 'guru')->first();

        $user = new User();
        $user->username = $request->input('nik');
        $user->password = bcrypt('password');
        $user->remember_token = Crypt::encryptString('remember_this');
        $user->save();
        $user->role()->attach($roleGuru);

        $guruAccount = new GuruAccount();
        $guruAccount->user()->associate($user);
        $guruAccount->guru()->associate($request->input('id'));
        $guruAccount->save();
    }

    public static function unRegisterUserGuru(Request $request){
        $guruAccount = GuruAccount::where('guru_id', '=', $request->input('id'))->first();
        $user = User::where('id', '=', $guruAccount->user_id)->first();
        $user->delete();
    }
}

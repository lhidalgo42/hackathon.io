<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;


class User extends Eloquent implements UserInterface, RemindableInterface {


    use RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $fillable = [

        'email', 'password', 'username'

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    /**
     * @return array
     */
    public function isAdmin(){
        if(Role::find($this->role_id)->name == "Administrador")
            return true;
        else
            return false;
    }

    public function hasPermission($name){

    }


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);

    }
    public function role()
    {
        return $this->belongsTo('Role');
    }

    public function theme()
    {
        return $this->belongsTo('Theme');
    }

    public function companies()
    {
        return $this->belongsToMany('Company', 'company_user', 'user_id', 'company_id');
    }

    public function branches($company_id){
        $this->belongsToMany('Branch','Branch_user','user_id','branch_id')->where('branches.company_id','=',$company_id);
    }
}

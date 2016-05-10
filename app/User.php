<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Role;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the roles a user has
     */
    public function roles()
    {
        return $this->belongsToMany('App\\Role', 'users_roles');
    }
 
    /**
     * Find out if User is an employee, based on if has any roles
     *
     * @return boolean
     */
    public function isEmployee()
    {
        $roles = $this->roles->toArray();
        return !empty($roles);
    }
 
    /**
     * Find out if user has a specific role
     *
     * $return boolean
     */
    public function hasRole($check)
    {
        return in_array($check, array_fetch($this->roles->toArray(), 'name'));
    }
 
    /**
     * Get key in array with corresponding value
     *
     * @return int
     */
    private function getIdInArray($array, $term)
    {

        var_dump($array, $term);
        foreach ($array as $key => $value) {
            if ($value == $term) {
                return $key;
            }
        }
 
        throw new UnexpectedValueException;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = \Hash::make( $value );
    }
 
    /**
     * Add roles to user to make them a concierge
     */
    public function makeEmployee($title)
    {
        $assigned_roles = array();
 
        $roles = array_fetch(Role::all()->toArray(), 'name');
 
        switch ($title) {
            case 'super_admin':
                $assigned_roles[] = $this->getIdInArray($roles, 'edit_customer');
                $assigned_roles[] = $this->getIdInArray($roles, 'delete_customer');
                $assigned_roles[] = $this->getIdInArray($roles, 'create_customer');
            case 'admin':
                $assigned_roles[] = $this->getIdInArray($roles, 'edit_content');
            case 'user':
                $assigned_roles[] = $this->getIdInArray($roles, 'reed_content');
                break;
            default:
                throw new \Exception("The employee status entered does not exist");
        }
 
        $this->roles()->attach($assigned_roles);
    }
}

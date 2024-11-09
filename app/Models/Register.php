<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Register
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $type
 *
 * @package App\Models
 */
class Register extends Model
{
	protected $table = 'register';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'type'
	];
}

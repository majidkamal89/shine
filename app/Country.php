<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'country';
	protected $fillable = array('country_name','status');
	public $timestamps = false;

    public function index() {
		$countries = self::paginate(2);
		return $countries;
	}
}

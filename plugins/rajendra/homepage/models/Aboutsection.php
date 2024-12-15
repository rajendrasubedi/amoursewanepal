<?php namespace Rajendra\HomePage\Models;

use Model;

/**
 * Model
 */
class Aboutsection extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'rajendra_homepage_aboutsection';


    public $attachOne = [
        'firstrowimage' => 'System\Models\File',
        'secondrowimage' => 'System\Models\File',
        'thirdrowimage' => 'System\Models\File',
        'fourthrowimage' => 'System\Models\File',
    ];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}

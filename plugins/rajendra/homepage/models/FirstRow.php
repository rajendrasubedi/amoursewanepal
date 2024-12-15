<?php namespace Rajendra\HomePage\Models;

use Model;

/**
 * Model
 */
class FirstRow extends Model
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
    public $table = 'rajendra_homepage_firstrow';

    public $attachOne = [
        'fleximagebanner' => 'System\Models\File',
    ];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
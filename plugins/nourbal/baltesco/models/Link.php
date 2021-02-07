<?php namespace Nourbal\Baltesco\Models;

use Model;

/**
 * Model
 */
class Link extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'nourbal_baltesco_links';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function scopeIsSocialNetwork($query)
    {
        return $query->Where('type', 'facebook')
        ->orWhere('type', 'instagram')
        ->orWhere('type', 'youtube');
    }

    // get quotes 
    public function scopeQuoteTitle($query)
    {
        return $query->inRandomOrder()->Where('type', 'quotes')->value('title');
    }
      
}

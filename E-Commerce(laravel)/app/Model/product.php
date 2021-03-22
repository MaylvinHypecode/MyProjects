<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model implements \Czim\Paperclip\Contracts\AttachableInterface
{
    protected $table = 'product';
    use \Czim\Paperclip\Model\PaperclipTrait;

    public function __construct(array $attributes = [])
    {
        $this->hasAttachedFile('image', [
            'variants' => [
                'medium' => [
                    'auto-orient' => [],
                    'resize'      => ['dimensions' => '300x300'],
                ],
                'thumb' => '100x100',
            ],
            'attributes' => [
                'variants' => true,
            ],
        ]);

        parent::__construct($attributes);
    }

    public function basket()
    {
        return $this->belongsToMany('App\Model\basket', 'basket_has_product', 'basket_id', 'product_id');
    }
}

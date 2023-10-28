<?php

namespace App\Helpers;
use Intervention\Image\Filters\FilterInterface;
// namespace Intervention\Image\Filters;

class ImageFilter implements FilterInterface
{
    /**
     * Default size of filter effects
     */
    const DEFAULT_SIZE = 10;
    const BLUR_VALUE = 15;

    /**
     * Size of filter effects
     *
     * @var integer
     */
    private $size;
    private $blur;

    /**
     * Creates new instance of filter
     *
     * @param integer $size
     */
    public function __construct($size = null, $blur = 10)
    {
        $this->size = is_numeric($size) ? intval($size) : self::DEFAULT_SIZE;
        $this->blur = is_numeric($blur) ? intval($blur) : self::BLUR_VALUE;
    }

    /**
     * Applies filter effects to given image
     *
     * @param  Intervention\Image\Image $image
     * @return Intervention\Image\Image
     */
    public function applyFilter(\Intervention\Image\Image $image)
    {
        return $image->fit($this->size, null, function ($constraint) {
            $constraint->aspectRatio();
        })->blur($this->blur)->greyscale();
    }
}
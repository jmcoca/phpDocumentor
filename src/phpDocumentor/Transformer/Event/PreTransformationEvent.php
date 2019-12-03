<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 */

namespace phpDocumentor\Transformer\Event;

use phpDocumentor\Event\EventAbstract;
use phpDocumentor\Transformer\Transformation;

/**
 * Event happening prior to each individual transformation.
 */
final class PreTransformationEvent extends EventAbstract
{
    /** @var Transformation */
    protected $transformation;

    public function __construct($subject, Transformation $transformation)
    {
        parent::__construct($subject);
        $this->transformation = $transformation;
    }

    public static function create(object $subject, Transformation $transformation) : self
    {
        return new static($subject, $transformation);
    }

    public function getTransformation() : Transformation
    {
        return $this->transformation;
    }
}

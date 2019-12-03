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

namespace phpDocumentor\Transformer\Writer\Twig;

use phpDocumentor\Descriptor\ProjectDescriptor;
use phpDocumentor\Transformer\Transformation;

/**
 * An interface shared by all Twig interfaces intended for phpDocumentor.
 */
interface ExtensionInterface
{
    /**
     * Registers the structure and transformation objects with this extension.
     *
     * The Structure and Transformation object can be used to get context from
     * and to provide additional information.
     *
     * @param ProjectDescriptor $project        Represents the complete Abstract Syntax Tree.
     * @param Transformation    $transformation Represents the transformation meta data used in the current generation
     *     cycle.
     */
    public function __construct(ProjectDescriptor $project, Transformation $transformation);
}

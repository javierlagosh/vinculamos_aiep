<?php

/*
 * This file is part of Psy Shell.
 *
<<<<<<< HEAD
 * (c) 2012-2022 Justin Hileman
=======
 * (c) 2012-2023 Justin Hileman
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\CodeCleaner;

use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified as FullyQualifiedName;
use PhpParser\Node\Stmt\Namespace_;

/**
 * Abstract namespace-aware code cleaner pass.
 */
abstract class NamespaceAwarePass extends CodeCleanerPass
{
    protected $namespace;
    protected $currentScope;

    /**
     * @todo should this be final? Extending classes should be sure to either
     * use afterTraverse or call parent::beforeTraverse() when overloading.
     *
     * Reset the namespace and the current scope before beginning analysis
<<<<<<< HEAD
=======
     *
     * @return Node[]|null Array of nodes
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public function beforeTraverse(array $nodes)
    {
        $this->namespace = [];
        $this->currentScope = [];
    }

    /**
     * @todo should this be final? Extending classes should be sure to either use
     * leaveNode or call parent::enterNode() when overloading
     *
     * @param Node $node
<<<<<<< HEAD
=======
     *
     * @return int|Node|null Replacement node (or special return value)
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public function enterNode(Node $node)
    {
        if ($node instanceof Namespace_) {
            $this->namespace = isset($node->name) ? $node->name->parts : [];
        }
    }

    /**
     * Get a fully-qualified name (class, function, interface, etc).
     *
     * @param mixed $name
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    protected function getFullyQualifiedName($name): string
    {
        if ($name instanceof FullyQualifiedName) {
            return \implode('\\', $name->parts);
        } elseif ($name instanceof Name) {
            $name = $name->parts;
        } elseif (!\is_array($name)) {
            $name = [$name];
        }

        return \implode('\\', \array_merge($this->namespace, $name));
    }
}

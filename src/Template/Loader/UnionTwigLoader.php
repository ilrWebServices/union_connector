<?php

/**
 * @file
 * Contains \Drupal\union_organizer\Template\Loader\UnionTwigLoader.
 */

namespace Drupal\union_organizer\Template\Loader;

/**
 * Loads templates from the filesystem.
 *
 * This loader adds the `@union` namespace to the Twig filesystem loader so that
 * templates can be referenced by namespace, like
 * @union/button/button.twig.
 */
class UnionTwigLoader extends \Twig_Loader_Filesystem {

  // Keep track of libraries that we attempt to register.
  // protected $libraries = array();

  /**
   * Constructs a new ComponentsLoader object.
   *
   * @param string|array $paths
   *   A path or an array of paths to check for templates.
   */
  public function __construct($paths = array()) {
    // Don't pass $paths to __contruct() or it will create the default Twig
    // namespace in this Twig loader.
    parent::__construct();

    $this->setPaths("libraries/union/source/components", "union");
  }
}

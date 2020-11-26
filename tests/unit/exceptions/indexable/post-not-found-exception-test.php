<?php

namespace Yoast\WP\SEO\Tests\Unit\Exceptions\Indexable;

use Yoast\WP\SEO\Exceptions\Indexable\Post_Not_Found_Exception;
use Yoast\WP\SEO\Tests\Unit\TestCase;

/**
 * Class Post_Not_Found_Exception_Test
 *
 * @group exceptions
 *
 * @coversDefaultClass \Yoast\WP\SEO\Exceptions\Indexable\Post_Not_Found_Exception
 */
class Post_Not_Found_Exception_Test extends TestCase {

	/**
	 * Tests the constructor.
	 *
	 * @covers ::__construct
	 */
	public function test_constructor() {
		$instance = new Post_Not_Found_Exception();

		self::assertEquals(
			'The post could not be found.',
			$instance->getMessage()
		);
	}
}

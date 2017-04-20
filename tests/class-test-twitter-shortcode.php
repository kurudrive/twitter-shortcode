<?php
class TwitterShortcodeTest extends WP_UnitTestCase {
	function test_twitter_shortcode(){
		$html = do_shortcode( '[twitter]@miya0001[/twitter]' );
		$this->assertEquals('<a href="https://twitter.com/miya0001">@miya0001</a>', $html);

		$html = do_shortcode( '[twitter]miya0001[/twitter]' );
		$this->assertEquals('<a href="https://twitter.com/miya0001">@miya0001</a>', $html);
	}
}
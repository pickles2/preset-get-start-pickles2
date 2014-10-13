<?php
/**
 * processor "*.md"
 */
namespace pickles\processors;

/**
 * processor "*.md" class
 */
class md{
	public static function exec( $px ){

		foreach( $px->get_content_keys() as $key ){
			$src = $px->pull_content( $key );

			$src = \Michelf\MarkdownExtra::defaultTransform($src);

			$src = $px->replace_content( $src, $key );
		}

		return true;
	}
}
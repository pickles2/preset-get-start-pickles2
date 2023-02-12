<?php /*
すべての layout について共通の、headセクションの記述
*/ ?>

		<meta name="viewport" content="width=device-width, initial-scale=1" />

<?= $px->get_contents_manifesto(); ?>

		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/modules.css') ); ?>" />
		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/styles/theme.css') ); ?>">

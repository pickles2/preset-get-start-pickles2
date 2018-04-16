<?php /*
すべての layout について共通の、headセクションの記述
*/ ?>

<?= $px->get_contents_manifesto(); ?>

		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/modules.css') ); ?>" />
		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/styles/theme.css') ); ?>">

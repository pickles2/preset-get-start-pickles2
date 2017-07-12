<?php /*
すべての layout について共通の、headセクションの記述
*/ ?>

<?= $px->get_contents_manifesto(); ?>

		<!-- Bootstrap Theme -->
		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/styles/bootstrap-theme.min.css') ); ?>">
		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/styles/theme.css') ); ?>">

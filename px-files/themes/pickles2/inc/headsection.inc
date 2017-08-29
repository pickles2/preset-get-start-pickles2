<?php /*
すべての layout について共通の、headセクションの記述
*/ ?>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/bootstrap/css/bootstrap.min.css') ); ?>">
		<script src="<?= htmlspecialchars( $theme->files('/bootstrap/js/bootstrap.min.js') ); ?>"></script>

<?= $px->get_contents_manifesto(); ?>

		<!-- Bootstrap Theme -->
		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/bootstrap/css/bootstrap-theme.min.css') ); ?>">
		<link rel="stylesheet" href="<?= htmlspecialchars( $theme->files('/styles/theme.css') ); ?>">

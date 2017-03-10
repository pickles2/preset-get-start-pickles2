<?php
/**
 * Contents Manifesto
 *
 * このファイルは、コンテンツの制作環境を宣言します。
 * モジュールを定義するCSSやJavaScriptファイルを読み込みます。
 *
 * このファイルを異なるテーマ間で共有することにより、テーマを取り替えても、
 * コンテンツの表現を再現する前提を保証することができます。
 *
 * Contents Manifesto は、 `$px->get_contents_manifesto()` から取得できます。
 * テーマは、 headセクション内にこの値を出力して、Contents Manifesto を読み込んでください。
 *
 * テーマは、コンテンツが .contents の中に置かれるように実装します。
 * 従って、 Contents Manifesto で定義される CSS や JavaScript は、.contents の中にのみ影響するように実装されるべきです。
 * テーマを交換したとき、テーマの要素に影響を与え、崩してしまわないための配慮です。
 *
 */ ?>
 <?php
	 //$pxがない(=直接アクセスされた)場合、ここで処理を抜ける。
 	if(!$px){return;}
 ?>

<!-- jQuery -->
<script src="<?= htmlspecialchars($px->href('/common/scripts/jquery-1.10.1.min.js')); ?>" type="text/javascript"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="<?= htmlspecialchars( $px->href('/common/styles/bootstrap/css/bootstrap.min.css') ); ?>">
<script src="<?= htmlspecialchars( $px->href('/common/styles/bootstrap/js/bootstrap.min.js') ); ?>"></script>

<!-- Contents Styles -->
<link rel="stylesheet" href="<?= htmlspecialchars($px->href('/common/styles/contents.css')); ?>" type="text/css" />
<script src="<?= htmlspecialchars( $px->href('/common/scripts/contents.js') ); ?>"></script>

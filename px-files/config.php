<?php
return call_user_func( function(){

	// initialize
	$conf = new stdClass;

	// project
	$conf->name = 'Pickles 2'; // サイト名
	$conf->domain = null; // ドメイン
	$conf->path_controot = '/'; // コンテンツルートディレクトリ

	// paths
	$conf->path_top = '/'; // トップページのパス(デフォルト "/")
	$conf->path_publish_dir = null; // パブリッシュ先ディレクトリパス
	$conf->public_cache_dir = '/caches/'; // 公開キャッシュディレクトリ
	$conf->contents_manifesto = '/common/contents_manifesto.ignore.php'; // Contents Manifesto のパス


	// directory index
	// `directory_index` は、省略できるファイル名のリストを設定します。
	$conf->directory_index = array(
		'index.html'
	);


	// system
	$conf->file_default_permission = '775'; // ファイルに適用されるデフォルトのパーミッション
	$conf->dir_default_permission = '775'; // ディレクトリに適用されるデフォルトのパーミッション
	$conf->filesystem_encoding = 'UTF-8'; // ファイルシステムの文字セット。ファイル名にマルチバイト文字を使う場合に参照されます。
	$conf->output_encoding = 'UTF-8'; // 出力文字エンコーディング名
	$conf->output_eol_coding = 'lf'; // 出力改行コード名 (cr|lf|crlf)
	$conf->session_name = 'PXSID'; // セッション名
	$conf->session_expire = 1800; // セッションの有効期間
	$conf->allow_pxcommands = 0; // PX Commands のウェブインターフェイスからの実行を許可



	// commands
	// Pickles2 が認識するコマンドのパスを設定します。
	// コマンドのパスが通っていない場合は、絶対パスで設定してください。
	$conf->commands = new stdClass;
	$conf->commands->php = 'php';



	// paths_proc_type
	// パスのパターン別に処理方法を設定します。
	//     - ignore = 対象外パス
	//     - direct = 加工せずそのまま出力する(デフォルト)
	//     - その他 = extension 名
	// パターンは先頭から検索され、はじめにマッチした設定を採用します。
	// ワイルドカードとして "*"(アスタリスク) が使用可能です。
	// 処理は、 `$conf->funcs->processor` に設定した順に実行されます。
	$conf->paths_proc_type = array(
		'/.htaccess' => 'ignore' ,
		'/.px_execute.php' => 'ignore' ,
		'/px-files/*' => 'ignore' ,
		'*.ignore/*' => 'ignore' ,
		'*.ignore.*' => 'ignore' ,
		'/composer.json' => 'ignore' ,
		'/composer.lock' => 'ignore' ,
		'/README.md' => 'ignore' ,
		'/vendor/*' => 'ignore' ,
		'*/.DS_Store' => 'ignore' ,
		'*/Thumbs.db' => 'ignore' ,
		'*/.svn/*' => 'ignore' ,
		'*/.git/*' => 'ignore' ,
		'*/.gitignore' => 'ignore' ,

		'*.html' => 'html' ,
		'*.htm' => 'html' ,
		'*.css' => 'css' ,
		'*.js' => 'js' ,
		'*.png' => 'direct' ,
		'*.jpg' => 'direct' ,
		'*.gif' => 'direct' ,
		'*.svg' => 'direct' ,
	);


	// -------- functions --------

	$conf->funcs = new stdClass;

	// funcs: Before sitemap
	// サイトマップ読み込みの前に実行するプラグインを設定します。
	$conf->funcs->before_sitemap = [
		// PX=clearcache
		'picklesFramework2\commands\clearcache::register' ,

		 // PX=config
		'picklesFramework2\commands\config::register' ,

		 // PX=phpinfo
		'picklesFramework2\commands\phpinfo::register' ,

		// sitemapExcel
		'tomk79\pickles2\sitemap_excel\pickles_sitemap_excel::exec' ,

		// PX=px2dthelper
		'tomk79\pickles2\px2dthelper\main::register'
	];

	// funcs: Before content
	// サイトマップ読み込みの後、コンテンツ実行の前に実行するプラグインを設定します。
	$conf->funcs->before_content = [
		// PX=api
		'picklesFramework2\commands\api::register' ,

		// PX=publish
		'picklesFramework2\commands\publish::register' ,

	];


	// processor
	// コンテンツの種類に応じた処理の設定を行います。
	// `$conf->funcs->processor->{$paths_proc_typeに設定した処理名}` のように設定します。
	// それぞれの処理は配列で、複数登録することができます。処理は上から順に実行されます。
	// Tips: テーマは、html に対するプロセッサの1つとして実装されています。
	$conf->funcs->processor = new stdClass;

	$conf->funcs->processor->html = [
		// ページ内目次を自動生成する
		'picklesFramework2\processors\autoindex\autoindex::exec' ,

		// テーマ
		'theme'=>'pickles2\themes\pickles\theme::exec' ,

		// Apache互換のSSIの記述を解決する
		'picklesFramework2\processors\ssi\ssi::exec' ,

		// output_encoding, output_eol_coding の設定に従ってエンコード変換する。
		'picklesFramework2\processors\encodingconverter\encodingconverter::exec' ,
	];

	$conf->funcs->processor->css = [
		// output_encoding, output_eol_coding の設定に従ってエンコード変換する。
		'picklesFramework2\processors\encodingconverter\encodingconverter::exec' ,
	];

	$conf->funcs->processor->js = [
		// output_encoding, output_eol_coding の設定に従ってエンコード変換する。
		'picklesFramework2\processors\encodingconverter\encodingconverter::exec' ,
	];

	$conf->funcs->processor->md = [
		// Markdown文法を処理する
		'picklesFramework2\processors\md\ext::exec' ,

		// html の処理を追加
		$conf->funcs->processor->html ,
	];

	$conf->funcs->processor->scss = [
		// SCSS文法を処理する
		'picklesFramework2\processors\scss\ext::exec' ,

		// css の処理を追加
		$conf->funcs->processor->css ,
	];


	// funcs: Before output
	// 最終出力の直前で実行される処理を設定します。
	// この処理は、拡張子によらずすべてのリクエストが対象です。
	// (HTMLの場合は、テーマの処理の後のコードが対象になります)
	$conf->funcs->before_output = [
		// px2-path-resolver - 相対パス・絶対パスを変換して出力する
		//   options
		//     string 'to':
		//       - relate: 相対パスへ変換
		//       - absolute: 絶対パスへ変換
		//       - pass: 変換を行わない(default)
		//     bool 'supply_index_filename':
		//       - true: 省略されたindexファイル名を補う
		//       - false: 省略できるindexファイル名を削除
		//       - null: そのまま (default)
		'tomk79\pickles2\pathResolver\main::exec('.json_encode(array(
			'to' => 'absolute' ,
			'supply_index_filename' => false
		)).')' ,

	];


	// config for Plugins.
	// その他のプラグインに対する設定を行います。
	$conf->plugins = new stdClass;

	// config for Pickles2 Desktop Tool.
	$conf->plugins->px2dt = new stdClass;
	$conf->plugins->px2dt->paths_module_template = [
		"PlainHTMLElements" => "./vendor/tomk79/px2-mod-plain-html-elements/modules/",
		"FESS" => "./vendor/tomk79/px2-fess/modules/"
	];


	return $conf;
} );

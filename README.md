Get start "Pickles 2" !
=========

[Pickles 2](https://pickles2.pxt.jp/) は、静的で大きなウェブサイトを効率よく構築できる オープンソースのHTML生成ツールです。

- サイトマップ(ページリスト)をCSV形式で管理し、グローバルナビゲーションの生成やカレント処理、パンくず生成、タイトルやメタタグの出力などを自動化します。
- コンテンツ(ページ固有の内容部分)と、テーマ(ヘッダ、フッタ、ナビゲーションなどの共通部分)に分けてコーディングします。テーマはサイト全体を通して一元化された共通コードから自動生成します。
- データベース不要、PHP5.4以上 が動くウェブサーバーに手軽に導入できます。
- Markdown や SCSS などの文法を動的に導入できます。
- 簡単なコマンドで、スタティックなHTMLファイルを出力(パブリッシュ)できます。
- Composer 導入により、機能の追加、拡張が手軽にできるようになりました。


## インストール手順 - Install

Pickles 2 プロジェクトのセットアップは、`composer` コマンドを使用します。

```bash
$ cd {$yourProjectRoot}
$ composer create-project pickles2/preset-get-start-pickles2 ./
$ chmod -R 777 ./px-files/_sys
$ chmod -R 777 ./src_px2/common/px_resources
```

ウェブサーバーにブラウザでアクセスして、トップページが表示されるか、または、次のコマンドで設定情報が表示されれば成功です。

```bash
$ php ./src_px2/.px_execute.php "/?PX=config"
```

## パブリッシュ手順 - Publish

```bash
$ php ./src_px2/.px_execute.php "/?PX=publish.run"
```

`dist/` に、スタティックなHTMLとして出力されます。


## キャッシュを消去する手順 - Clear caches

```bash
$ php ./src_px2/.px_execute.php "/?PX=clearcache"
```

## システム要件 - System Requirement

- Linux系サーバ または Windowsサーバ
- Apache
  - mod_rewrite が利用可能であること
  - .htaccess が利用可能であること
- PHP 5.4 以上
  - [mbstring](https://www.php.net/manual/ja/book.mbstring.php) PHP Extension
  - [ZipArchive](https://www.php.net/manual/ja/class.ziparchive.php) PHP Extension
  - [JSON](https://www.php.net/manual/ja/book.json.php) PHP Extension
  - [PDO](https://www.php.net/manual/ja/book.pdo.php) PHP Extension
  - [PDO SQLite (PDO_SQLITE)](https://www.php.net/manual/ja/ref.pdo-sqlite.php) PHP Extension
  - [XML Parser](https://www.php.net/manual/ja/book.xml.php) PHP Extension
  - [XMLWriter](https://www.php.net/manual/ja/book.xmlwriter.php) PHP Extension

### 推奨環境

- PHP 7.2 以上
  - [Ctype](https://www.php.net/manual/ja/book.ctype.php) PHP Extension
  - [DOM](https://www.php.net/manual/ja/book.dom.php) PHP Extension
  - [Fileinfo](https://www.php.net/manual/ja/book.fileinfo.php) PHP Extension
  - [GD](https://www.php.net/manual/ja/book.image.php) PHP Extension
  - [iconv](https://www.php.net/manual/ja/book.iconv.php) PHP Extension
  - [libxml](https://www.php.net/manual/ja/book.libxml.php) PHP Extension
  - [SimpleXML](https://www.php.net/manual/ja/book.simplexml.php) PHP Extension
  - [XMLReader](https://www.php.net/manual/ja/book.xmlreader.php) PHP Extension
  - [Zlib](https://www.php.net/manual/ja/book.zlib.php) PHP Extension

プラグインなど他のパッケージとの構成によって、いくつかの要件が追加される場合があります。
依存パッケージのシステム要件も確認してください。



## 更新履歴 - Change log

### pickles2/preset-get-start-pickles2 v2.1.0 (2020年12月19日)

- ディレクトリ構成を変更。プレビュー環境のドキュメントルートが `src_px2/` に、 パブリッシュ先ディレクトリが `dist/` に変更されました。
- モジュールパッケージを更新。

### pickles2/preset-get-start-pickles2 v2.0.26 (2020年12月10日)

- ライブラリ更新 - jQuery to v3.5.1。
- モジュールパッケージを更新。

### pickles2/preset-get-start-pickles2 v2.0.25 (2020年4月4日)

- モジュールパッケージ `tomk79/broccoli-module-std-document` を 0.1.5 に更新。
- モジュールパッケージ `tomk79/broccoli-module-interact` を 0.1.1 に更新。
- モジュールパッケージ `tomk79/broccoli-module-lp` を 0.1.4 に更新。
- プラグイン `tomk79/px2-scss` を導入。

### pickles2/preset-get-start-pickles2 v2.0.24 (2020年3月14日)

- モジュールパッケージ `tomk79/broccoli-module-std-document` を 0.1.4 に更新。
- ユーザーの環境に適合しない場合にインストールが失敗する問題を解消するため、 `composer.lock` を削除した。 (ただし、 `.gitignore` には記載しない。ユーザーの環境でセットアップした際に生成される `composer.lock` は プロジェクトにコミットされるべきです)

### pickles2/preset-get-start-pickles2 v2.0.23 (2020年1月18日)

- 依存パッケージ更新: pickles2/px-fw-2.x (2.0.43 => 2.0.44)
- 依存パッケージ更新: twig/twig (v1.42.4 => v3.0.1)
- 依存パッケージ更新: tomk79/langbank (0.0.3 => 0.0.4)
- 依存パッケージ更新: broccoli-html-editor/broccoli-html-editor (0.3.11 => 0.3.13)
- 依存パッケージ更新: pickles2/lib-px2-contents-editor (2.0.9 => 2.0.10)
- 依存パッケージ更新: pickles2/lib-px2-module-editor (0.2.4 => 0.2.6)
- 依存パッケージ更新: pickles2/px2-px2dthelper (2.0.13 => 2.0.14)
- 依存パッケージ更新: pickles2/px2-publish-ex (2.0.4 => 2.0.5)

### pickles2/preset-get-start-pickles2 v2.0.22 (2019年12月13日)

- プロジェクト固有の設定欄として `$conf->extra` を規定とした。
- 依存パッケージ更新: michelf/php-markdown (1.8.0 => 1.9.0)
- 依存パッケージ更新: pickles2/px-fw-2.x (2.0.42 => 2.0.43)
- 依存パッケージ更新: tomk79/broccoli-module-std-document (0.1.1 => 0.1.3)
- 依存パッケージ更新: tomk79/broccoli-module-lp (0.1.0 => 0.1.1)
- 依存パッケージ更新: symfony/polyfill-ctype (v1.12.0 => v1.13.1)
- 依存パッケージ更新: twig/twig (v1.42.3 => v1.42.4)
- 依存パッケージ更新: broccoli-html-editor/broccoli-html-editor (0.3.10 => 0.3.11)
- 依存パッケージ更新: pickles2/lib-px2-contents-editor (2.0.8 => 2.0.9)

### pickles2/preset-get-start-pickles2 v2.0.21 (2019年9月10日)

- 依存パッケージ更新: pickles2/px2-dec (2.0.1 => 2.0.2)
- 依存パッケージ更新: pickles2/px2-remove-attr (2.0.2 => 2.0.3)

### pickles2/preset-get-start-pickles2 v2.0.20 (2019年9月4日)

- 初期導入の汎用モジュールセットを刷新。より汎用的なサイト制作にすぐに導入できるようになりました。
- 依存パッケージ更新: pickles2/px-fw-2.x (2.0.41 => 2.0.42)
- 依存パッケージ更新: pickles2/px2-path-resolver (2.0.12 => 2.0.13)
- 依存パッケージ更新: symfony/polyfill-ctype (v1.11.0 => v1.12.0)
- 依存パッケージ更新: twig/twig (v1.42.2 => v1.42.3)
- 依存パッケージ更新: broccoli-html-editor/broccoli-html-editor (0.3.8 => 0.3.10)
- 依存パッケージ更新: pickles2/lib-px2-contents-editor (2.0.7 => 2.0.8)
- 依存パッケージ更新: pickles2/lib-px2-module-editor (0.2.3 => 0.2.4)
- 依存パッケージ更新: pickles2/px2-px2dthelper (2.0.12 => 2.0.13)
- 依存パッケージ更新: pickles2/px2-publish-ex (2.0.3 => 2.0.4)
- 依存パッケージ更新: tomk79/broccoli-module-std-document (0.1.0 => 0.1.1)


### pickles2/preset-get-start-pickles2 v2.0.19 (2019年6月20日)

- 依存パッケージ更新: twig/twig (v1.42.1 => v1.42.2)
- 依存パッケージ更新: broccoli-html-editor/broccoli-html-editor (0.3.7 => 0.3.8)

### pickles2/preset-get-start-pickles2 v2.0.18 (2019年6月15日)

- 依存パッケージ更新: leafo/scssphp (v0.7.7 => v0.7.8)
- 依存パッケージ更新: pickles2/px-fw-2.x (2.0.40 => 2.0.41)
- 依存パッケージ更新: pickles2/px2-path-resolver (2.0.11 => 2.0.12)
- 依存パッケージ更新: twig/twig (v1.39.1 => v1.42.1)
- 依存パッケージ更新: broccoli-html-editor/broccoli-html-editor (0.3.6 => 0.3.7)
- 依存パッケージ更新: pickles2/lib-px2-contents-editor (2.0.5 => 2.0.6)
- 依存パッケージ更新: pickles2/lib-px2-module-editor (0.2.2 => 0.2.3)
- 依存パッケージ更新: pickles2/px2-px2dthelper (2.0.11 => 2.0.12)
- 依存パッケージ更新: pickles2/px2-sitemapexcel (2.0.10 => 2.0.11)
- 依存パッケージ更新: pickles2/px2-publish-ex (2.0.2 => 2.0.3)

### pickles2/preset-get-start-pickles2 v2.0.17 (2019年4月20日)

- 依存パッケージ更新: pickles2/px-fw-2.x (2.0.39 => 2.0.40)
- 依存パッケージ更新: pickles2/px2-path-resolver (2.0.10 => 2.0.11)
- 依存パッケージ更新: phpoffice/phpexcel (1.8.1 => 1.8.2)
- 依存パッケージ更新: pickles2/px2-sitemapexcel (2.0.9 => 2.0.10)
- 依存パッケージ更新: pickles2/px2-publish-ex (2.0.1 => 2.0.2)
- 依存パッケージ更新: symfony/polyfill-ctype (v1.10.0 => v1.11.0)
- 依存パッケージ更新: twig/twig (v1.37.1 => v1.39.1)
- 依存パッケージ更新: broccoli-html-editor/broccoli-html-editor (0.3.5 => 0.3.6)

### pickles2/preset-get-start-pickles2 v2.0.16 (2019年4月19日)

- デフォルトの Broccoliエンジンを `broccoli-html-editor-php` に変更。
- 文字セットと改行コード変換のプラグイン `picklesFramework2\processors\encodingconverter\encodingconverter::exec` を、 `$conf->funcs->before_output` の中で一括してかけるように設定を変更した。

### pickles2/preset-get-start-pickles2 v2.0.15 (2019年2月22日)

- `composer.lock` を追加。

### pickles2/preset-get-start-pickles2 v2.0.14 (2019年1月11日)

- `composer` が出すエラーが表示されないようになっていた問題を修正。

### pickles2/preset-get-start-pickles2 v2.0.13 (2018年8月30日)

- パブリッシュプラグインとして、機能拡張版 `pickles2/px2-publish-ex` を導入した。

### pickles2/preset-get-start-pickles2 v2.0.12 (2018年5月16日)

- モジュールの設定を `$conf->paths_module_template` から `$conf->path_module_templates_dir` に変更。これにより、 DesktopTool で編集できるようになった。

### pickles2/preset-get-start-pickles2 v2.0.11 (2018年4月24日)

- GUI編集モード対応のサンプルテーマを追加
- px2-sitemapexcel の変換方向を xlsx -> csv のみになる設定を追加
- プロジェクトにバンドルされていた Bootstrap、 normalize.css を削除。
- テーマにバンドルされていた Bootstrap を削除。

### pickles2/preset-get-start-pickles2 v2.0.10 (2017年10月27日)

- 古いメソッド名 `$bowl->pull()` で呼び出していた箇所を、新しい `$bowl->get_clean()` に変更

### pickles2/preset-get-start-pickles2 v2.0.9 (2017年9月21日)

- 新しいコンフィグ項目 `scheme` を追加
- broccoli-receive-message スクリプト挿入プラグインを標準で有効化
- テーマとプロジェクトのリソースが密依存になっていた問題を解消


## ライセンス - License

Copyright (c)2001-2020 Tomoya Koyanagi, and Pickles Project<br />
MIT License https://opensource.org/licenses/mit-license.php


## 作者 - Author

- Tomoya Koyanagi <tomk79@gmail.com>
- website: <https://www.pxt.jp/>
- Twitter: @tomk79 <https://twitter.com/tomk79/>

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
$ cd {$documentRoot}
$ composer create-project pickles2/preset-get-start-pickles2 ./
$ chmod -R 777 ./px-files/_sys
$ chmod -R 777 ./common/px_resources
```

ウェブサーバーにブラウザでアクセスして、トップページが表示されるか、または、次のコマンドで設定情報が表示されれば成功です。

```bash
$ php ./.px_execute.php "/?PX=config"
```

## パブリッシュ手順 - Publish

```bash
$ php ./.px_execute.php "/?PX=publish.run"
```

`./px-files/dist/` に、スタティックなHTMLとして出力されます。


## キャッシュを消去する手順 - Clear caches

```bash
$ php ./.px_execute.php "/?PX=clearcache"
```

## システム要件 - System Requirement

- Linux系サーバ または Windowsサーバ
- Apache1.3以降
  - mod_rewrite が利用可能であること
  - .htaccess が利用可能であること
- PHP5.4以上
  - mb_string が有効に設定されていること
  - safe_mode が無効に設定されていること



## 更新履歴 - Change log

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

Copyright (c)2001-2019 Tomoya Koyanagi, and Pickles 2 Project<br />
MIT License https://opensource.org/licenses/mit-license.php


## 作者 - Author

- Tomoya Koyanagi <tomk79@gmail.com>
- website: <https://www.pxt.jp/>
- Twitter: @tomk79 <https://twitter.com/tomk79/>

Get start "Pickles 2" !
=========

[Pickles 2](http://pickles2.pxt.jp/) は、静的で大きなウェブサイトを効率よく構築できる オープンソースのHTML生成ツールです。

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



## ライセンス - License

Copyright (c)2001-2017 Tomoya Koyanagi, and Pickles 2 Project<br />
MIT License https://opensource.org/licenses/mit-license.php


## 作者 - Author

- Tomoya Koyanagi <tomk79@gmail.com>
- website: <http://www.pxt.jp/>
- Twitter: @tomk79 <http://twitter.com/tomk79/>

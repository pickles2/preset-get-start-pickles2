Pickles 2
=========

## インストール手順 - Install

```
$ cd {$documentRoot}
$ composer create-project tomk79/pickles2 ./ dev-master
$ chmod -R 777 ./.pickles/_sys
$ chmod -R 777 ./caches
```

### composer のインストール

Pickles 2 のインストールは、composer を使用します。
`composer` のインストールについて詳しくは https://getcomposer.org/doc/00-intro.md を参照してください。

Mac の方は、次のコマンドでグローバルインストールできます。

```
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
```

Windows の方は、次のコマンドでグローバルインストールできます。
GUIインストーラ Composer-Setup.exe も用意されていますので、お好みの方法でインストールしてください。

```
$ C:\Users\username>cd C:\bin
$ C:\bin>php -r "readfile('https://getcomposer.org/installer');" | php
```


# 『WEB+DB PRESS Vol.121』「Composer 2によるパッケージ管理」ソースコード集
このリポジトリでは『WEB+DB PRESS Vol.121』に掲載された記事「Composer 2によるパッケージ管理」に登場するソースコードを公開しています。

## ソースコードへのリンク
* [プラットフォームのチェック](./01_runtime_no_check_platform)
* [パッケージ／バージョンチェック](./02_runtime_package_version_check)
* [パッケージの一時的なアップグレード／ダウングレード](./03_partial_upgrade_downgrade)
* [正規／非正規リポジトリ](./04_repository_prioties_canonical)

### おまけ
* [Compsoser2.0のリポジトリ](./base)
* [Compsoser1.10のリポジトリ](./base1)

## 環境準備
この環境では、DockerおよびDocker-composeを使用しております。

各ディレクトリに移動して、以下の実行コマンドを実行してください。

```
$ docker-compose run composer {コマンド}
```

例えばcomposer installを実行したい場合は、以下の用に実行してください。

```
$ docker-compose run composer composer install
```
<h1 style="color: red">ケーススタディ 設定</h1>

<h2 style="color: crimson"> ★ Github からのクローン</h2>

以下の Github リポジトリからクローンしてね。  
[ケーススタディの Github リポジトリ](https://github.com/Sigoku14/case4)

<h2 style="color: crimson"> ★ クローン後の動き</h2>

**.env**ファイルが存在しないため、エラーになる。  
それを解決するためには、**.env.example**をコピーして新規作成するしかない。
なので、

```
copy .env.example .env
```

とコマンドに入力してね。

<h2 style="color: crimson"> ★ Composer のインストール</h2>

cd 等で.env が存在するフォルダまで移動してね。  
その後、Composer をインストールします。

↓Mac バージョンは下記のコマンドを実行

```
brew install composer
```

Windows バージョンについては調べながらよろしく〜

<h2 style="color: crimson"> ★ npm のインストール</h2>

Composer と同様に npm をインストールしてね。

```
npm install
```

を実行してね。

<h3 style="color: lime"> ひとまず環境設定は以上かな？</h3>

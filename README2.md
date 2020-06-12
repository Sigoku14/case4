<h1 style="color: blue">ケーススタディ 諸事項</h1>

<h2 style="color: crimson">★ .env内の設定</h2>

もし初期のままなのであれば、
.env 内の記述を何箇所か変更しないといけない。

<h3 style="color: pink">1.Database</h3>

```
DB_DATABASE=laravel
```

↓

```
DB_DATABASE=case
```

に変更してね。  
他に変更箇所が出てき次第追加する。

<h2 style="color: crimson">★ データベース名</h2>

DB は基本的にマイグレーションとシーダーで操作します。  
ですが、マイグレーションは DB ができてからのものとなるため、各自 DB を用意してください。

現状、DB 名は

```
case
```

といたします。

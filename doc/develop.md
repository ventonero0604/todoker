# 開発手順
### 1.gulpの起動
```
$ npm run watch:local
```
### 2. ページにアクセス
http://localhost:8000/{gulpfile.babel.jsから見た相対パス}

### 3. 画像の生成
* base64
 * `/src/asset/datauri`以下に入れた画像をscssコンパイル時に自動でbase64化。
* スプライト画像
 * `/src/asset/sprite`以下にスプライト画像用の素材を入れた状態で下記コマンド
* 通常として使用したい画像
 * `/src/asset/image`以下に通常として使用したい画像素材を入れた状態で下記コマンド
 ```
 $ npm run sprite
 ```
 -> スプライト画像とスプライト用のSCSSファイルが生成。
 
# final16
* 系統主畫面 (可用一張至數張系統代表性畫面，系統畫面建議存放在其他網站，例如，https://imgur.com)

* 系統的作用 

* 系統的主要功能 (簡要列出每一功能、路由、及負責的同學)
1. 登入、登出、註冊
```
 Method        | URI                        | Name          | Action                                                     | Middleware   |
 GET|HEAD      | auth/login                 |               | App\Http\Controllers\MemberController@getLogin             | web          |
 POST          | auth/login                 |               | App\Http\Controllers\MemberController@postLogin            | web          |
 GET|HEAD      | auth/logout                |               | App\Http\Controllers\MemberController@getLogout            | web          |
 POST          | auth/logout                |               | App\Http\Controllers\MemberController@postLogout           | web          |
 POST          | auth/register              |               | App\Http\Controllers\MemberController@postRegister         | web          |
 GET|HEAD      | auth/register              |               | App\Http\Controllers\MemberController@getRegister          | web          |
```
2. 會員資料顯示(會員基本資料、消費紀錄)、修改

```
Method        | URI                        | Name          | Action                                                     | Middleware   |
GET|HEAD      | member                     |               | App\Http\Controllers\MemberController@index                | web          |
GET|HEAD      | member/modify              |               | App\Http\Controllers\MemberController@modify               | web          |
POST          | member/modify              |               | App\Http\Controllers\MemberController@update               | web          |
POST          | member/upload/img          |               | App\Http\Controllers\MemberController@upload_img           | web          |
```
3. QRcode掃描綁定購物籃

```
Method        | URI                        | Name          | Action                                                     | Middleware   |
GET|HEAD      | qrcode                     |               | Closure                                                    | web          |
GET|HEAD      | qrcode/blending/{buggy_id} |               | App\Http\Controllers\BuggyController@blending              | web          |
GET|HEAD      | qrcode/reader              |               | Closure                                                    | web          |
GET|HEAD      | qrcode/unblending          |               | App\Http\Controllers\BuggyController@unblending            | web          |
```
4. 購物籃商品新增刪除修改
```
Method        | URI                        | Name          | Action                                                     | Middleware   |
GET|HEAD      | buggy                      |               | App\Http\Controllers\BuggyController@show                  | web          |
GET|HEAD      | buggy/admin/{buggies_id}   |               | App\Http\Controllers\BuggyController@index                 | web          |
POST          | buggy/waitfor              |               | App\Http\Controllers\BuggyController@waitfor               | web          |
```
5. 購物籃頁面及時反饋

```
Method        | URI                        | Name          | Action                                                     | Middleware   |
GET|POST|HEAD | broadcasting/auth          |               | Illuminate\Broadcasting\BroadcastController@authenticate   | web          |
```
6. 結帳作業

```
Method        | URI                        | Name          | Action                                                     | Middleware   |
POST          | result                     |               | App\Http\Controllers\BuggyController@result                | web          |
GET|HEAD      | buggy/checkout             |               | App\Http\Controllers\BuggyController@checkout              | web          |
```

* 初始專案與DB負責的同學 (若負責的同學超過一位，列出每一位同學負責的部分)

* 額外使用的套件或樣板 (簡要說明用途)

1. "pusher/pusher-php-server": "~3.0" :

2. "simplesoftwareio/simple-qrcode": "~2" :composer的套件，產生儲存籃子綁定網址的Qrcode

3. "vue-qrcode-reader": "^1.3.3" :Vue.js的套件，Qrcode的掃瞄器

* 系統復原步驟 (包括測試資料)

從github上clone回來
```
git clone https://github.com/WISD-2018/final16
```
切換到專案目錄
```
cd final16
```
還原composer 套件
```
composer install
```
還原npm套件
```
npm install
```
複製.env.example生成.env
```
cp .env.example .env
```
產生金鑰
```
artisan key:generate
```
測試
```
artisan serve
```
能成功看到主頁代表成功

* 系統使用帳號

展示用帳號(如有需要可以自行註冊)
> 帳號:aa123 密碼:zz456
* 系統開發人員

1. [彭柏瑄](https://github.com/aa349276)

2. [蘇詠臨](https://github.com/3A532035)

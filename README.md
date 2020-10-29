# oc-plugin-telescope

### 安装

```
git clone https://github.com/octobercms-plugin/oc-plugin-telescope plugins/jcc/telescope
```

### 运行命令
```
cd plugins/jcc/telescope

composer install

```

```
php artisan october:up

```
```
php artisan telescope:publish
```

### 配置

local

.env
```
APP_ENV=local

```

product
```
APP_ENV=product
DEVELOPER_MAILS=admin@domain.tld //允许后台登录用户邮箱查看admin@domain.tld换成白名单邮箱
```

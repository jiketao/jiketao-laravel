## 开发

1. start  `php -S localhost:8888 -t public`


## 配置

nignx
```
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
```

```shell
//将所有配置文件合并到一个文件中并缓存起来。
php artisan config:cache

// 重命名应用
php artisan app:name jiketao

// 维护模式，队列任务 将不会被处理。
// resources/views/errors/503.blade.php。
php artisan down

// 关闭维护模式
php artisan up
```



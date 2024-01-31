example sql

```sql
CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` int NOT NULL
);



INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'milk', 2),
(2, 'water', 2),
(3, 'bannana', 10);


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
```

config в /engine/modules/configs/config.inc.php

nginx website
```conf
server {
    listen      80;
    root /var/www/cms/pub/;
 
    index index.php;
 
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
 
    location /api {
        try_files $uri $uri/ /api.php?$query_string;
    }
 
    location ~ .php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.1-fpm.sock;
    }
 
    location ~ /.ht {
        deny all;
    }
}

```

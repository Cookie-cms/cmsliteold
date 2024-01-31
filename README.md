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
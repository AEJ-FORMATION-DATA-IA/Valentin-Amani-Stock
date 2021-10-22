SELECT SUM(price) FROM product GROUP BY category_id;

SELECT product.* FROM `product` INNER JOIN category ON product.category_id = category.id WHERE 1=1 AND category.name="cat1";

SELECT product.* FROM `product` WHERE product.category_id = (SELECT category.id FROM category WHERE category.name = 'cat1');

SELECT p.* FROM `product` as p INNER JOIN category as c ON p.category_id = c.id WHERE 1=1 AND c.name="cat1";

SELECT p.* FROM `product` as p WHERE p.category_id = (SELECT c.id FROM category as c WHERE c.name = 'cat1');
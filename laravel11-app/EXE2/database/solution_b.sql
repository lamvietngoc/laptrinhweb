-- 1. Liệt kê các hóa đơn của khách hàng
SELECT orders.user_id, users.user_name, orders.order_id FROM orders INNER JOIN users ON orders.user_id = users.user_id;

-- 2. Liệt kê số lượng các hóa đơn của khách hàng
SELECT users.user_id, users.user_name, COUNT(orders.order_id) AS total_orders FROM users LEFT JOIN orders ON users.user_id = orders.user_id GROUP BY users.user_id;

-- 3. Liệt kê thông tin hóa đơn: mã đơn hàng, số sản phẩm
SELECT orders.order_id, COUNT(order_details.product_id) AS total_products FROM orders LEFT JOIN order_details ON orders.order_id = order_details.order_id GROUP BY orders.order_id;

-- 4. Liệt kê thông tin mua hàng của người dùng
SELECT users.user_id, users.user_name, orders.order_id, products.product_name FROM users INNER JOIN orders ON users.user_id = orders.user_id INNER JOIN order_details ON orders.order_id = order_details.order_id INNER JOIN products ON order_details.product_id = products.product_id ORDER BY orders.order_id;

-- 5. Liệt kê 7 người dùng có số lượng đơn hàng nhiều nhất
SELECT users.user_id, users.user_name, COUNT(orders.order_id) AS total_orders FROM users INNER JOIN orders ON users.user_id = orders.user_id GROUP BY users.user_id ORDER BY total_orders DESC LIMIT 7;

-- 6. Liệt kê 7 người dùng mua sản phẩm có tên 'Samsung' hoặc 'Apple'
SELECT DISTINCT users.user_id, users.user_name, orders.order_id, products.product_name FROM users INNER JOIN orders ON users.user_id = orders.user_id INNER JOIN order_details ON orders.order_id = order_details.order_id INNER JOIN products ON order_details.product_id = products.product_id WHERE products.product_name LIKE '%Samsung%' OR products.product_name LIKE '%Apple%' LIMIT 7;

-- 7. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng
SELECT users.user_id, users.user_name, orders.order_id, SUM(products.product_price) AS total_price FROM users INNER JOIN orders ON users.user_id = orders.user_id INNER JOIN order_details ON orders.order_id = order_details.order_id INNER JOIN products ON order_details.product_id = products.product_id GROUP BY orders.order_id;

-- 8. Liệt kê đơn hàng có giá trị cao nhất của mỗi user
SELECT user_id, user_name, order_id, total_price FROM (SELECT users.user_id, users.user_name, orders.order_id, SUM(products.product_price) AS total_price, RANK() OVER (PARTITION BY users.user_id ORDER BY SUM(products.product_price) DESC) AS r FROM users INNER JOIN orders ON users.user_id = orders.user_id INNER JOIN order_details ON orders.order_id = order_details.order_id INNER JOIN products ON order_details.product_id = products.product_id GROUP BY orders.order_id) ranked WHERE r = 1;

-- 9. Liệt kê đơn hàng có giá trị thấp nhất của mỗi user
SELECT user_id, user_name, order_id, total_price FROM (SELECT users.user_id, users.user_name, orders.order_id, SUM(products.product_price) AS total_price, RANK() OVER (PARTITION BY users.user_id ORDER BY SUM(products.product_price) ASC) AS r FROM users INNER JOIN orders ON users.user_id = orders.user_id INNER JOIN order_details ON orders.order_id = order_details.order_id INNER JOIN products ON order_details.product_id = products.product_id GROUP BY orders.order_id) ranked WHERE r = 1;

-- 10. Liệt kê đơn hàng có số sản phẩm nhiều nhất của mỗi user
SELECT user_id, user_name, order_id, total_products FROM (SELECT users.user_id, users.user_name, orders.order_id, COUNT(order_details.product_id) AS total_products, RANK() OVER (PARTITION BY users.user_id ORDER BY COUNT(order_details.product_id) DESC) AS r FROM users INNER JOIN orders ON users.user_id = orders.user_id INNER JOIN order_details ON orders.order_id = order_details.order_id GROUP BY orders.order_id) ranked WHERE r = 1;

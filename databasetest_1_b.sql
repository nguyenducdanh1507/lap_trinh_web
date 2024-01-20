1. Liệt kê 7 người dùng mua sản phẩm có tên: Samsung hoặc Apple trong tên sản
phẩm, thông tin hiển thị gồm: mã user, tên user, mã đơn hàng, tên sản phẩ
SELECT users.user_id, users.user_name, orders.order_id, products.product_name
FROM users
INNER JOIN orders ON users.user_id = orders.order_id
INNER JOIN order_details ON orders.order_id = order_details.order_detail_id
INNER JOIN products ON order_details.order_detail_id = products.product_id
WHERE products.product_name LIKE '%Samsung%' OR products.product_name LIKE '%Apple%';

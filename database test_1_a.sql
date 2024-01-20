 Lấy ra danh sách 10 khách hàng theo thứ tự Tên khách hàng theo Alphabet (Z->A), tên khách hàng có chiều dài nhỏ hơn chiều dài của email, tên khách hàng có chiều dài
từ 5 đến 20 ký tự (>=5, <=20) gồm các thông tin: Mã khách hàng, Tên khách hàng, Email.
SELECT user_id, user_name, user_email
FROM users
WHERE LENGTH(user_name) >= 5 AND LENGTH(user_name) <= 20
ORDER BY user_name DESC, user_email
LIMIT 10;
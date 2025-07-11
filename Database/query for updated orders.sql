--Meet Maheta

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    name VARCHAR(255),
    number VARCHAR(255),
    email VARCHAR(255),
    method VARCHAR(255),
    address VARCHAR(255),
    total_products VARCHAR(255),
    total_price DECIMAL(10,2)
);

-- src/schema.sql
CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_var_user VARCHAR(255) NOT NULL,
    email_var_user VARCHAR(255) NOT NULL,
    password_var_user VARCHAR(255) NOT NULL
);

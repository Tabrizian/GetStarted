CREATE TABLE comments (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    photograph_id INT(11) NOT NULL,
    created DATETIME NOT NULL,
    authodr VARCHAR(255) NOT NULL,
    body TEXT NOT NULL
);

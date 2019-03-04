CREATE TABLE users (id int(10) AUTO_INCREMENT, username varchar(255) NOT NULL UNIQUE, email varchar(255) NOT NULL, created_at timestamp NOT NULL, PRIMARY KEY (id));

CREATE TABLE topics (id int(10) AUTO_INCREMENT, user_id varchar(255), body varchar(255) NOT NULL, created_at timestamp NOT NULL, PRIMARY KEY (id), FOREIGN KEY (user_id) REFERENCES users (username));
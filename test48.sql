ALTER TABLE users MODIFY (email varchar(255) NOT NULL UNIQUE);

ALTER TABLE users DROP COLUMN age;

ALTER TABLE users CHANGE name first_name varchar(255) NOT NULL;

ALTER TABLE users ADD COLUMN created_at timestamp;
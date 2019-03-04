INSERT INTO friendship (user1_id, user2_id) VALUES ((SELECT id from users WHERE first_name = 'Jon'), (SELECT id from users WHERE first_name = 'Tirion'));

INSERT INTO friendship (user1_id, user2_id) VALUES ((SELECT id from users WHERE first_name = 'Tirion'), (SELECT id from users WHERE first_name = 'Jon'));
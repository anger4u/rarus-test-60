SELECT topics.id, users.first_name FROM topics, users WHERE topics.user_id=users.id AND users.email LIKE '%@lannister.com' ORDER BY topics.created_at ASC;
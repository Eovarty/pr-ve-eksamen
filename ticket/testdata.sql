-- Inserting sample data into the user table
INSERT INTO users (username, password) VALUES
('john_doe', 'password123'),
('alice_smith', 'securepass'),
('emma_jones', 'p@ssw0rd');

-- You can add more rows as needed

INSERT INTO ticket (subject, description, status, date, userID) VALUES 
('Issue with login', 'Unable to log in to the system', 'Open', CURDATE(), 6);

INSERT INTO users (username, password) VALUES
('john_doe', 'password123'),
('alice_smith', 'securepass'),
('emma_jones', 'p@ssw0rd');

INSERT INTO users (username, password, admin) VALUES
('admin', 'admin', 1);

DELETE FROM users WHERE username = 'admin';

UPDATE users SET admin = '1' WHERE username = 'admin';

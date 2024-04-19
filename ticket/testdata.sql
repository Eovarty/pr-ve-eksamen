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


INSERT INTO ticket (subject, description, status, date, userID) VALUES 
('Issue with login', 'I am unable to log in to my account. Whenever I try, it gives me an error message saying "Invalid credential I am unable to log in to my account. Whenever I try, it gives me an error message saying "Invalid credential I am unable to log in to my account. Whenever I try, it gives me an error message saying "Invali I am unable to log in to my account. Whenever I try, it gives me an error message saying "Invalid credentiald credentials."', 'Not completed', CURDATE(), 10);

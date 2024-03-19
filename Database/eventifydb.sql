CREATE DATABASE eventifydb;

-- events table
-- Create events table
CREATE TABLE events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    description TEXT,
    location VARCHAR(255),
    event_date DATETIME,
    status ENUM('upcoming', 'in progress', 'completed')
);

-- Insert sample values into the events table
INSERT INTO events (event_name, description, location, event_date, status)
VALUES
    ('Birthday Party', 'Celebrating John\'s birthday', '123 Main Street', '2024-04-15 18:00:00', 'upcoming'),
    ('Wedding Ceremony', 'Join us to celebrate the union of Jack and Jill', 'Church of St. Mary', '2024-05-20 14:00:00', 'upcoming'),
    ('Conference', 'Annual conference for tech enthusiasts', 'Convention Center', '2024-06-10 09:00:00', 'in progress');

-- SELECT * FROM events;

-- attendees table
Attendee ID (Primary Key)
Event ID (Foreign Key referencing the Events Table)
Attendee Name
Email
Phone Number

--organizers table
Staff ID (Primary Key)
Staff Name
Email
Role

--payment table
Payment ID (Primary Key)
Event ID (Foreign Key referencing the Events Table)
Amount
Payment Date





-- Create the table for attendees
CREATE TABLE attendees (
    attendee_id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (event_id) REFERENCES events(event_id) ON DELETE CASCADE
);

-- Insert sample values into the attendees table

-- Insert sample data into the attendees table
INSERT INTO attendees (event_id, name, email, phone)
VALUES
    (1, 'John Doe', 'john@example.com', '123-456-7890'),
    (1, 'Jane Smith', 'jane@example.com', '987-654-3210'),
    (2, 'Alice Johnson', 'alice@example.com', '555-123-4567'),
    (3, 'Bob Brown', 'bob@example.com', '999-888-7777');

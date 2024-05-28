# Baywatch Hotel Reservation System

## Overview
The Hotel Reservation System is a web application that allows users to view available rooms, make and cancel reservations, and manage bookings based on user roles. This project is designed to provide a seamless experience for both customers and hotel administrators.

## Features
- View Rooms: Users can browse through the available rooms with detailed descriptions and images.
- Book Reservations: Users can book rooms by filling out a form with their details.
- Cancel Reservations: Users can cancel their reservations if needed.
- Role-Based Access: Users can view, delete, and manage reservations based on their roles (e.g., Admin, Customer).

## Technologies Used
- HTML
- PHP
- MySQL
- CSS
- JavaScript

## Installation
Clone the repository:

```bash
git clone https://github.com/arshakshan/Baywatch-Hotel-Reservation.git
```

Navigate to the project directory:

```bash
cd hotel-reservation
```

Set up the database:

- Create a MySQL database.
- Import the SQL scripts from the db folder to set up the necessary tables.

Configure the database connection:

- Open config.php and update the database connection settings.

Start the server:

- Use a local server like XAMPP or WAMP to host the project.
- Place the project files in the server's root directory (e.g., htdocs for XAMPP).

## Usage
- Open the web application in your browser.
- Navigate through the different sections to view rooms, make reservations, or manage bookings.
- Log in with appropriate credentials to access role-based features.

## File Structure
- index.html: The main landing page.
- room.html: Page to view available rooms.
- booking.html: Form to book a room.
- cancel1.html: Form to cancel a reservation.
- config.php: Database connection settings.
- rooms.php, rooms1.php: PHP scripts to handle room data.
- db.php: PHP script for database interactions.
- gallery.html: Page to view the image gallery.
Various image files for room and hotel images.

## Contribution
Contributions are welcome! Please create a pull request or open an issue to discuss any changes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.

## Acknowledgments
Thanks to the contributors and the open-source community for their invaluable resources and support.

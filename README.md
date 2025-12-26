# Campus-Movement-Tracker

A QR-code based Entry/Exit management system developed for IIIT Allahabad (4th Semester DBMS Project). This application tracks student movement between locations (CC3, Library, etc.) and manages credits automatically based on valid entry/exit procedures.

## Features
- **Admin Dashboard:** View real-time location of students.
- **QR Scanning:** Scan QR codes to check-in/check-out.
- **Credit System:** Automatic penalty for entering a new zone without exiting the previous one.
- **User Management:** Student registration and login.

## Tech Stack
- **Frontend:** HTML, CSS, JavaScript (html5-qrcode)
- **Backend:** PHP
- **Database:** MySQL

## How to Run Locally

1. **Install XAMPP** (or WAMP/MAMP).
2. **Clone the Repo:**
   - Download this repository as a ZIP.
   - Extract the files into `C:\xampp\htdocs\EntryExitSystem`.
3. **Setup Database:**
   - Open XAMPP Control Panel and start **Apache** and **MySQL**.
   - Go to `http://localhost/phpmyadmin/`.
   - Create a new database named **`dbms`**.
   - Click **Import**, select the `dbms.sql` file provided in this repo, and click **Go**.
4. **Configure Connection:**
   - Ensure your MySQL root password is empty (default XAMPP). If you have a password, update `PHP/connect.php`.
5. **Launch:**
   - Open browser and visit: `http://localhost/EntryExitSystem/HTML/Home.html`

## Usage
- **Admin Login:** Use password `admin123`.
- **QR Codes:** Use text format `Location,Room` (e.g., `CC3,Lab-1`) to generate QR codes.

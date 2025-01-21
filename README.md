# Robot Control Web Application

This project is a simple web application designed to control the movement of a robot base and log directional data in a Firebase Realtime Database. It also includes a PHP script to retrieve the latest direction from the database.

## Features
- **Web Interface**: A clean and responsive UI with buttons to control the robot's movement (Forward, Backward, Left, Right).
- **Firebase Integration**: Logs directional data to Firebase Realtime Database with timestamps.
- **Data Retrieval**: A PHP script fetches the last logged direction from the database.

---

## Technologies Used
1. **Frontend**:
   - HTML, CSS, JavaScript
   - Firebase SDK for JavaScript

2. **Backend**:
   - PHP
   - Firebase Admin SDK for PHP

3. **Database**:
   - Firebase Realtime Database

---

## Project Structure
```
robot_control/
├── index.html          # The main web interface
├── retrieve_last_value.php  # PHP script to fetch the latest direction
├── vendor/             # Composer dependencies for Firebase Admin SDK
├── composer.json       # Composer configuration file
├── composer.lock       # Composer lock file
├── robotcontrol-<key>.json   # Firebase service account key (private)
```

---

## Setup Instructions

### 1. Clone the Repository
```bash
git clone <https://github.com/SaraSadik651387/Robot-Control-Web-Application)>
cd robot_control
```

### 2. Configure Firebase
1. Create a Firebase project in [Firebase Console](https://console.firebase.google.com/).
2. Enable **Realtime Database** and set the rules to `read` and `write` as `true` for testing purposes.
3. Download the **Service Account Key** from Project Settings > Service Accounts.
4. Place the `.json` key file in the project root.

### 3. Install PHP Dependencies
Make sure you have Composer installed. Run the following command in the project root:
```bash
composer install
```

### 4. Run the Application
1. Start a local server using XAMPP or any PHP server.
2. Place the project folder in the `htdocs` directory (for XAMPP).
3. Access the web interface:
   ```
   http://127.0.0.1:5500/index.html
   ```
4. Test the PHP script:
   ```
   http://localhost/robot_control/retrieve_last_value.php
   ```

---

## Usage
1. Open the web interface in your browser.
![Image](https://github.com/user-attachments/assets/33653af4-311e-441c-adcb-fe833f6011d1)

2. Click the directional buttons to log robot movements to Firebase.
![Image](https://github.com/user-attachments/assets/216f8b54-bc9f-4be7-b6f0-ea9db7af6de2)
   
3. Use the PHP script to view the latest logged direction and timestamp.
![Image](https://github.com/user-attachments/assets/0731ef62-c757-4c3d-a9fb-02d2244dd738)
---

## Future Enhancements
- Add authentication for secure database access.
- Implement more advanced robot controls.
- Integrate real-time feedback from the robot.

---

## Author
Developed by Sarah Sadik.

---


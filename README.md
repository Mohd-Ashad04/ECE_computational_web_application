# ECE Computational Web Application

This is a full-featured web-based system designed to manage and organize the Electronics and Communication Engineering (ECE) department’s computational and academic infrastructure. The application provides a centralized way to input and manage data about faculty members, lab infrastructure, computational devices, and lab incharges. It is built using PHP and MySQL, and is designed to run on a XAMPP stack.

---

## 🚀 Key Features

- **Faculty Information Management**  
  Stores and manages data such as room number, name, designation, and email.  
  → Stored in: `faculty_details` table

- **Lab Details Management**  
  Records lab names, room numbers, floor levels, PC models, number of systems, projectors, and UPS devices.  
  → Stored in: `lab_details` table

- **Lab Incharge Allocation**  
  Maintains mapping of each lab to its faculty incharge and assigned lab attendant.  
  → Stored in: `lab_incharge` table

- **Computational Inventory Tracking**  
  Stores information on faculty-wise allocation of laptops, desktops, printers, and graphic tablets.  
  → Stored in: `computational_item_details` table

- **User Authentication (Login/Signup)**  
  Provides basic signup and login functionality for secure access.  
  → Stored in: `user` table

---

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3
- **Backend**: PHP 8.2
- **Database**: MySQL (via phpMyAdmin)
- **Local Server**: XAMPP (Apache + MariaDB)
- **Version Control**: Git & GitHub

---

## 📁 Folder & File Structure

```
ece_project/
│
├── home.html
├── login.html
├── signup.html
│
├── faculty_details.html
├── lab_details.html
├── lab_incharge.html
├── computational_item_details.html
│
├── process_faculty_details.php
├── process_lab_details.php
├── process_lab_incharge.php
├── process_computational_details.php
├── process_signup.php
├── process_login.php
├── logout.php
```

---

## 📌 How to Run the Project

1. Place the `ece_project` folder inside `E:\xampp\htdocs\`
2. Start **Apache** and **MySQL** from the XAMPP Control Panel
3. Open browser and visit:  
   ```
   http://localhost/ece_project/
   ```
4. Create the database:
   - Open `phpMyAdmin`
   - Import the SQL file (which contains the `ecedatabase` schema)
5. Use the web forms to add records into the following tables:
   - `faculty_details`
   - `lab_incharge`
   - `lab_details`
   - `computational_item_details`

---

## 🔐 Security (Basic)

- Form validation using JavaScript
- Login/Signup forms store credentials in `user` table
- Password hashing using `password_hash()` (recommended for future improvement)

---

## 📈 Future Enhancements

- Admin panel to view/manage all data
- Export to Excel or CSV
- Role-based access (e.g., admin, faculty)
- Improved form styling using Bootstrap
- Search/filter functionality for each table

---

## 👨‍💻 Author

**Mohd Ashad**  
Computer Science Engineering Student  
Web Developer • Data Analyst Enthusiast  
[GitHub Profile](https://github.com/Mohd-Ashad04)

---

## 📄 License

This project is open-source and free to use for academic or institutional purposes under the MIT License.
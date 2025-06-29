# Simple PHP Website

A basic PHP website project demonstrating how to build a multi-page site using reusable components like headers and footers.

---

## 🌐 Features

- Home, About, and Contact pages
-  Reusable `header.php` and `footer.php` files (via `include`)
-  Working contact form with POST handling
-  Basic file structure for scaling into a full site

---

## 📁 Project Structure
```text
simple-php-site/
├── index.php # Homepage
├── about.php # About page
├── contact.php # Contact form
├── submit.php # Form handler
├── includes/
│ ├── header.php # Navigation + opening HTML
│ └── footer.php # Footer + closing HTML
```

---

## 🚀 How to Run

### 🖥 Option 1: Using PHP’s Built-in Server (No Apache Needed)

```bash
cd simple-php-site
php -S localhost:8000

##Open in your browser:
➡️ http://localhost:8000
```
### 🖥 Option 2: Using Apache (/var/www/html)
Make sure Apache and PHP are installed:

```bash
sudo apt update
sudo apt install apache2 php libapache2-mod-php
```
Then move files to your web root:

```bash
sudo cp -r simple-php-site/* /var/www/html/
```
Restart Apache:

```bash
sudo systemctl restart apache2
## visit:
➡️ http://localhost
```

### Contact Form (How It Works)
- The form in contact.php sends data using POST to submit.php

- submit.php receives and sanitizes the input

- Outputs a thank-you message

### 🛠 Technologies Used
- PHP 7+

- HTML5

- No database (yet) — file-based only

### Next Steps
- Want to improve it?

- Add form validation

- Store messages in a file or database

- Add file uploads

- Style with CSS or Bootstrap

### 📄 License
This project is free to use, modify, and learn from.


---

Let me know if you'd like:
- This in a downloadable `.zip`
- The README personalized for hosting on GitHub or Render
- A database-connected version (like MySQL with PDO)

Ready to level this up?

# GST Billing System

A web-based GST billing and invoice management system built with PHP, MySQL, Bootstrap, and JavaScript.

## Features
- Customer management (add, edit, delete customers)
- Invoice creation and management
- Add goods/items and rate details to invoices
- GST calculation (CGST, SGST)
- View, print, and download final bills
- User authentication (login/logout)
- Responsive UI with Bootstrap

## Project Structure
- `dist/` — Main application code
  - `customer.php` — Customer list and invoice actions
  - `invoice_details.php` — Invoice creation and details
  - `items.php` — Add/view goods and rate details for invoices
  - `view_bill.php` — Final bill view/print page
  - `partials/` — Navbar and sidebar includes
  - `assets/` — CSS, JS, images, and vendor libraries
- `db.php` — Database connection
- `package.json` — Frontend dependencies

## Setup Instructions
1. Clone this repository:
   ```sh
   git clone https://github.com/JAYASRI1108/gstbilling.git
   ```
2. Import the MySQL database (see your `db.php` for connection details).
3. Place the project in your XAMPP `htdocs` folder.
4. Run XAMPP and start Apache & MySQL.
5. Access the app at `http://localhost/Billing/dist/login.php`.

## Usage
- Login with your admin credentials.
- Add customers, create invoices, add goods and rate details.
- Use the "View Bill" button to see and print the final invoice.

## Dependencies
- PHP 7+
- MySQL
- Bootstrap 5
- jQuery, Chart.js, and other frontend libraries (see `package.json`)

## License
This project is based on my client requirements. Customize as needed for your business.

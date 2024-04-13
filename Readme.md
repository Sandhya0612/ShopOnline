# ShopOnline Auction Platform

## Overview
ShopOnline is a web-based auction system that allows users to list and bid on items following the English auction model. This project is designed to demonstrate the use of AJAX technologies, including JavaScript, PHP, XML, and XSLT, to create a dynamic and interactive web application.

## Features
- **User Registration and Login**: Secure registration and login functionality for users.
- **Item Listing**: Users can list items for auction with details such as item name, category, description, and pricing.
- **Bidding**: Enables real-time bidding on listed items.
- **Buy Now**: Allows users to buy items immediately at a set price.
- **Auction Management**: Maintenance tools for processing and reporting on auction items.

## Installation
Follow these steps to set up the ShopOnline platform on your local server:

### Prerequisites
- A web server such as Apache.
- PHP installed on your server.
- Access to a web browser.

### Setup
1. **Clone or Download the Repository**
git clone [repository-url]
Replace `[repository-url]` with the actual URL of your Git repository.

2. **Place the Project in Your Web Server's Root Directory**
Example for XAMPP:
/xampp/htdocs/

3. **Start Your Web Server**
Ensure that your Apache server is running.

4. **Open the Application**
Open your web browser and navigate to:
http://localhost/Project2/login.html


## File Structure
- `/js`: Contains JavaScript files that handle AJAX requests and UI interactions.
- `login.js`
- `register.js`
- `listing.js`
- `bidding.js`
- `maintenance.js`
- `/php`: PHP scripts for server-side processing.
- `login.php`
- `register.php`
- `list_item.php`
- `bid_item.php`
- `buy_now.php`
- `process_auctions.php`
- `generate_report.php`
- `/css`: Stylesheets for styling the web pages.
- `styles.css`
- `/data`: XML files used for data storage.
- `customer.xml`
- `auction.xml`
- `/xslt`: XSLT files for transforming XML data into readable reports.
- `report.xslt`
- `/html`: HTML files that constitute the front-end of the application.
- `login.html`
- `register.html`
- `listing.html`
- `bidding.html`
- `maintenance.html`

## Usage
- **Login/Register**: To access the platform, a user must login or register.
- **Listing Items**: Once logged in, navigate to the listing page to add items for auction.
- **Bidding on Items**: Users can bid on active listings through the bidding page.
- **Buy Now**: Available on the bidding page for instant purchase.
- **Maintenance**: Accessible by administrators for processing auctions and generating reports.

## Contributing
Contributions to the project are welcome. Please fork the repository, make your changes, and submit a pull request.

## License
This project is licensed under the MIT License - see the `LICENSE.md` file for details.

## Contact
For support or to report issues, please contact the project team via email at [email@email.com].



<h1> <a href="https://sahil-travelwebsite.000webhostapp.com/">Travel Package Booking Website(click to open website)</a> </h1> 
This is a full-stack travel booking website developed using PHP, MySQL, HTML, CSS, and JavaScript. Users can register, login, and book travel packages offered on the website. The website is hosted on 000webhost.

## Features

- **User Authentication**: Users can register with the website using a valid email address and password. Registered users can then log in to their accounts to access the booking functionality.

- **Travel Package Selection**: Users can browse through a variety of travel packages listed on the website. Each package provides details such as destination, duration, itinerary, and cost.

- **Booking System**: Users can select a travel package and proceed to book it. They can specify the number of travelers, preferred dates, and any additional preferences. Upon booking, the user receives a confirmation email with the booking details.

- **User Dashboard**: Registered users have access to a personalized dashboard where they can view their booking history, upcoming trips, and manage account settings.

## Technologies Used

- **Frontend**:
  - HTML: Markup language for structuring the website.
  - CSS: Stylesheet language for designing the layout and appearance.
  - JavaScript: Used for client-side interactivity and validation.

- **Backend**:
  - PHP: Server-side scripting language for handling user authentication, booking requests, and database operations.
  - MySQL: Relational database management system for storing user data, travel packages, and booking information.

## Folder Structure

The project folder structure is organized as follows:

```
travel-booking-website/
│
├── assets/           # Contains CSS, JavaScript, and image files
│   ├── css/
│   ├── js/
│   ├── images/
│
├── includes/         # Contains PHP files for including header, footer, and database connection
│
├── pages/            # Contains PHP files for different pages like login, register, booking, dashboard
│
├── config/           # Contains configuration files like database credentials
│
├── sql/              # Contains SQL scripts for creating database tables
│
├── README.md         # This README file
```

## Screenshots

Here are some screenshots of the website:

- Home Page:
  ![Home Page](https://github.com/Not-Sahil-Raja/Travel_Website/assets/145694814/5219911f-e603-4294-bac6-f811c8d7eecf)


- Registration Page:
  ![Registration Page](https://github.com/Not-Sahil-Raja/Travel_Website/assets/145694814/ecf6d13b-afe6-427e-aba1-43d44d1ad6d1)


- Login Page:
  ![Login Page](https://github.com/Not-Sahil-Raja/Travel_Website/assets/145694814/ac6042f6-2e9e-433a-b8be-20b773720453)

- Booking Packages Page:
- ![Booking Page](https://github.com/Not-Sahil-Raja/Travel_Website/assets/145694814/b06cb47f-df6d-4635-87df-eb5076fb0e47)

- Book Now:
  ![Book_Now](https://github.com/Not-Sahil-Raja/Travel_Website/assets/145694814/a853ff47-0cb9-40da-abf4-397d42dcb88e)


## Getting Started

To run the website locally, follow these steps:

1. Clone the repository to your local machine:

   ```
   git clone https://github.com/your-username/travel-booking-website.git
   ```

2. Import the SQL scripts from the `sql/` folder into your MySQL database to create the necessary tables.

3. Update the database connection settings in the `includes/db.php` file with your MySQL credentials.

4. Upload the files to your web server or use a local server environment like XAMPP or WAMP.

5. Access the website through your web browser.

## Deployment

The website is hosted on 000webhost and can be accessed at [Travel Booking Website](https://sahil-travelwebsite.000webhostapp.com/). 

## Contributing

Contributions are welcome! Feel free to fork the repository, make changes, and submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).


---

# e-shop-oop-mvc

e-shop-oop-mvc is a simple e-commerce web application built using the Object-Oriented Programming (OOP) paradigm and the Model-View-Controller (MVC) architecture in PHP.

## Features

- **MVC Architecture**: The project follows the Model-View-Controller architecture, separating concerns and making the codebase organized and maintainable.
- **Object-Oriented Programming**: Utilizes OOP principles to create reusable and modular components.
- **URL Routing**: Implements custom URL routing to map URLs to controllers and actions.
- **Template Rendering**: Views are rendered using template files, allowing for dynamic content generation.
- **Database Interaction**: Interacts with a database for storing and retrieving data, enabling functionality such as product listing, user authentication, etc.
- **Error Handling**: Includes error handling mechanisms to gracefully handle errors and exceptions.
- **.htaccess Configuration**: Utilizes Apache's `.htaccess` file for URL rewriting and configuration.

## Installation

1. Clone the repository:

    ```bash
    git clone <https://github.com/Abudi7/e-shop-local-oop-mvc>
    ```

2. Set up your Apache virtual host configuration to point to the project's `public` directory.

3. Ensure that Apache's rewrite module is enabled.

4. Create a MySQL database for the project and configure the database connection in `config/config.php`.

5. Import the database schema and sample data if provided.

6. Start your Apache server and MySQL database server.

## Usage

Once the project is installed and configured, you can access it through your web browser. Here are some example URLs:

- Home page: `http://localhost/e-shop-oop-mvc`
- Product listing: `http://localhost/e-shop-oop-mvc/products`
- User profile: `http://localhost/e-shop-oop-mvc/user/profile`
- Admin dashboard: `http://localhost/e-shop-oop-mvc/admin/dashboard`

## Directory Structure

```
e-shop-oop-mvc/
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   └── Views/
    ├── Libraries/
│   ├── Helpers/
│
├── config/
│   └── config.php
│
├── public/
│   ├── .htaccess
    ├── css/
│   ├── img/
    ├── js/
│   └── index.php
│
└── README.md
```

- **app/**: Contains the application's controllers, models, and views.
- **config/**: Holds configuration files, such as database configuration.
- **public/**: Publicly accessible directory serving as the entry point for the application.

## Contributing

Contributions are welcome! Feel free to fork the project, make improvements, and submit pull requests.

## License

This project is licensed under the [MIT License](e-shop-oop-mvc).

---

Feel free to customize this README file further to include any additional details specific to your project or any setup instructions not covered above.

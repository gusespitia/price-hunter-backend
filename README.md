<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Claro, aquí tienes un archivo `README.md` para tu proyecto Laravel en inglés, incluyendo la información sobre los seeders.

```markdown
# Laravel CRUD API with React Integration

This project is a Laravel-based CRUD (Create, Read, Update, Delete) application integrated with a React frontend for managing categories, products, stores, users, and scraping products. The project includes default seeders for quick setup.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [API Documentation](https://pricehunter.s13.syntradeveloper.be/docs/)
- [Contributions](#contributions)
- [License](#license)

## Requirements

- PHP >= 7.4
- Composer
- MySQL
- Redis
- Node.js (for React frontend)
- npm or yarn (for React frontend)

## Installation

1. Clone this repository:
    ```
    git clone https://github.com/gusespitia/price-hunter-backend.git
    cd your-repo
    ```

2. Install PHP dependencies:
    ```
   ddev composer update
    ```

    ```
   ddev composer update
    ```

    ```
   ddev composer start
    ```
    
    ```
   ddev composer launch
    ```

## Configuration

1. Copy the example environment file and update your environment variables:
    ```
    cp .env.example .env
    ```

2. Generate the application key:
    ```
   ddev php artisan key:generate
    ```

3. Update your `.env` file with your database and Redis credentials:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379
    ```

4. Run the database migrations and seeders:
    ```
   ddev php artisan migrate --seed
    ```

## Usage

### Running the Development Server

Start the Laravel development server:
```
ddev start



### Default Seeder Values

The application comes with default seeders for quick setup. The following entities have default values:

- Categories
- Products
- Stores
- Users (admin)
- Scraping Products

These seeders provide initial data to get the application up and running quickly.

## API Documentation

### Authentication

- **Register**: `/api/register` [POST]
- **Login**: `/api/login` [POST]
- **Logout**: `/api/logout` [POST]
- **Refresh Token**: `/api/refresh` [POST]

### Categories

- **List Categories**: `/api/v1/categories` [GET]
- **Get Category by ID**: `/api/v1/categories/{id}` [GET]
- **Create Category**: `/api/v1/categories` [POST]
- **Update Category**: `/api/v1/categories/{id}` [PUT]
- **Delete Category**: `/api/v1/categories/{id}` [DELETE]
- **Get Products by Category Name**: `/api/v1/categories/{categoryName}/products` [GET]

### Products

- **List Products**: `/api/v1/products` [GET]
- **Get Product by ID**: `/api/v1/products/{id}` [GET]
- **Create Product**: `/api/v1/products` [POST]
- **Update Product**: `/api/v1/products/{id}` [PUT]
- **Delete Product**: `/api/v1/products/{id}` [DELETE]
- **Get Products by Category**: `/api/v1/products/category/{category}` [GET]

### Stores

- **List Stores**: `/api/v1/stores` [GET]

### Prices

- **List Prices**: `/api/v1/prices` [GET]
- **Get Prices by Store Name**: `/api/v1/prices/store/{storeName}` [GET]

### Contacts

- **Create Contact**: `/api/v1/contacts` [POST]

### Customer Lists

- **List Customer Lists**: `/api/v1/lists` [GET]
- **Create Customer List**: `/api/v1/lists` [POST]
- **Get Customer List by ID**: `/api/v1/lists/{id}` [GET]
- **Update Customer List**: `/api/v1/lists/{id}` [PUT]
- **Delete Customer List**: `/api/v1/lists/{id}` [DELETE]

## Contributions

Contributions are welcome! Please fork this repository and submit a pull request for any enhancements or bug fixes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
```


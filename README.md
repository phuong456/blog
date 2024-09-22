# Laravel Blog Application

This is a simple Laravel-based blog application that allows users to create and view blog posts.

## Features

- View a list of blog posts
- Create new blog posts

## Project Structure

The project follows a standard Laravel structure with the following key components:

- Controllers: `app/Http/Controllers/PostController.php`
- Views: 
  - `resources/views/welcome.blade.php`
  - `resources/views/post.blade.php`
  - `resources/views/createpost.blade.php`
- Routes: Defined in `routes/web.php` (not provided in the snippets)
- Models: `app/Models/User.php` (Post model not shown in snippets)

## Requirements

- PHP 7.3 or higher
- Laravel 8.x
- MySQL

## Setup and Installation

1. Clone the repository:
   ```
   git clone https://github.com/phuong456/blog.git
   ```

2. Navigate to the project directory:
   ```
   cd blog
   ```

3. Install dependencies:
   ```
   composer install
   ```

4. Copy the `.env.example` file to `.env` and configure your database settings:
   ```
   cp .env.example .env
   ```

5. Run database migrations:
   ```
   php artisan migrate
   ```

6. Start the development server:
   ```
   php artisan serve
   ```


## Usage

- Access the home page at `/`
- View blog posts at `/posts`
- Create a new post at `/create`

## Database

The application uses a database table named `post` to store blog entries. The table structure includes:

- `id` (auto-incrementing primary key)
- `title`
- `content`
- `created_at`
- `updated_at`

## Controllers

The `PostController` handles the following actions:

- `create()`: Displays the form to create a new post
- `postCreate(Request $request)`: Processes the form submission to create a new post
- `getPost()`: Retrieves all posts to display in the list

## Views

- `welcome.blade.php`: The default Laravel welcome page
- `post.blade.php`: Displays the list of blog posts
- `createpost.blade.php`: Contains the form to create a new blog post

## Contributing

Contributions are welcome. Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
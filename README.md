# OpenTill

OpenTill is a modern point-of-sale (POS) system built with Laravel and TailwindCSS. This open-source solution provides businesses with a comprehensive till system for managing sales, inventory, and customer transactions.

## Features

- **Modern POS Interface**: Clean, intuitive interface built with TailwindCSS
- **Real-time Processing**: Built on Laravel framework for robust performance
- **Inventory Management**: Track products, stock levels, and categories
- **Sales Reporting**: Comprehensive analytics and reporting tools
- **User Management**: Multi-user support with role-based permissions
- **Transaction History**: Complete audit trail of all sales activities

## Tech Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: TailwindCSS 4.0, Vite
- **Database**: SQLite (default), MySQL/PostgreSQL supported
- **Queue System**: Database-driven queues for background processing
- **Testing**: Pest PHP testing framework
- **Code Quality**: Tighten Duster, Commitlint, Husky hooks, Lint-staged

## Requirements

- PHP 8.2 or higher
- Composer
- Bun (or Node.js & NPM)
- SQLite (or MySQL/PostgreSQL)

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url> opentill
   cd opentill
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   bun install
   # or npm install
   ```

4. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   ```bash
   php artisan migrate
   php artisan db:seed  # Optional: seed with sample data
   ```

6. **Build Assets**
   ```bash
   bun run build
   # or npm run build
   ```

## Development

### Quick Start
Run all development services with a single command:
```bash
composer run dev
```

This will start:
- Laravel development server (port 8000)
- Queue worker for background jobs
- Log monitoring with Pail
- Vite development server for hot module replacement

### Individual Services

**Start the development server:**
```bash
php artisan serve
```

**Watch for file changes:**
```bash
bun run dev
# or npm run dev
```

**Run background queues:**
```bash
php artisan queue:work
```

**Monitor logs:**
```bash
php artisan pail
```

## Testing

Run the test suite:
```bash
composer run test
```

Or run tests directly:
```bash
php artisan test
```

## Configuration

### Database
The project uses SQLite by default for simplicity. To use MySQL or PostgreSQL:

1. Update your `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=opentill
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

2. Run migrations:
   ```bash
   php artisan migrate:fresh
   ```

### Queue Configuration
Background jobs are processed via database queues by default. For production, consider using Redis:

```env
QUEUE_CONNECTION=redis
REDIS_HOST=127.0.0.1
REDIS_PORT=6379
```

## Deployment

### Production Setup

1. **Optimize for production:**
   ```bash
   composer install --optimize-autoloader --no-dev
   bun run build
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Set up environment:**
   ```bash
   php artisan migrate --force
   php artisan storage:link
   ```

3. **Configure web server** to point to the `public` directory

4. **Set up process manager** for queue workers:
   ```bash
   php artisan queue:work --daemon
   ```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes using conventional commits (`git commit -m 'feat: add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Standards

This project maintains high code quality through multiple automated tools and standards:

#### Code Formatting & Quality Tools

- **PHP-CS-Fixer**: Advanced code formatting with custom Tighten rules
- **PHPCS**: Code standards checking using Tighten ruleset
- **Pint**: Laravel-specific code styling with comprehensive rules
- **Duster**: Integrated code quality suite by Tighten

#### Available Commands

```bash
# Format code with Duster (recommended)
./vendor/bin/duster fix

# Run PHP-CS-Fixer
./vendor/bin/php-cs-fixer fix

# Check code with PHPCS
./vendor/bin/phpcs

# Format with Pint
./vendor/bin/pint
```

#### Automated Quality Checks

- **Pre-commit hooks**: Automatically lint and format staged files
- **Lint-staged**: Runs quality checks only on changed files
- **Commitlint**: Enforces conventional commit message format
- **Husky**: Manages git hooks for consistent quality checks

#### Development Standards

- Follow PSR-12 coding standards
- Write tests for new features
- Ensure all tests pass before submitting PR
- Use conventional commit messages (feat, fix, style, docs, etc.)
- Code is automatically formatted on commit via git hooks

## Security

If you discover a security vulnerability, please send an email to the project maintainers. All security vulnerabilities will be promptly addressed.

## License

OpenTill is open-sourced software licensed under the [MIT license](LICENSE).

## Support

- **Documentation**: [Laravel Documentation](https://laravel.com/docs)
- **Issues**: [GitHub Issues](../../issues)
- **Discussions**: [GitHub Discussions](../../discussions)

---

Built with ❤️ using Laravel and TailwindCSS

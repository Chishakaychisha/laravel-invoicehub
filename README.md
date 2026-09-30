# InvoiceHub

A Laravel invoice-management REST API starter for freelancers and small teams. It supports creating invoices, listing them, and tracking their progress from draft to paid.

## Highlights

- Laravel routes and controllers
- Eloquent model with protected mass assignment
- Database migration
- Validated client, amount, due-date, and status fields
- Route-model binding for status updates

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Configure a database in `.env` before migration; SQLite is suitable for a local demo.

## Endpoints

| Method | Endpoint | Purpose |
| --- | --- | --- |
| `GET` | `/api/invoices` | List invoices |
| `POST` | `/api/invoices` | Create invoice |
| `PATCH` | `/api/invoices/{invoice}` | Update status |

Example body:

```json
{"client_name":"Acme Studio","client_email":"billing@acme.test","amount":1250,"status":"sent","due_date":"2026-10-15"}
```

## Roadmap

Authentication, PDF invoices, email reminders, an admin dashboard, and PHPUnit feature tests.

**Stack:** PHP · Laravel · Eloquent ORM · Migrations · REST API

## Book & Author Management System

A Laravel backend API for managing authors and their books with proper one-to-many relationships.

## Tech Stack
- Laravel
- PHP
- MySQL
- REST API

## Features
- Create, read, update, delete authors
- Create, read, update, delete books
- One author can have multiple books
- Proper database relationships with foreign keys
- Request validation
- JSON API responses

## Database Structure

### Authors Table
- id
- name
- email
- timestamps

### Books Table
- id
- title
- author_id (foreign key)
- timestamps

## API Endpoints

### Author APIs
- GET `/api/authors`
- POST `/api/authors`
- GET `/api/authors/{id}`
- PUT `/api/authors/{id}`
- DELETE `/api/authors/{id}`

### Book APIs
- GET `/api/books`
- POST `/api/books`
- GET `/api/books/{id}`
- PUT `/api/books/{id}`
- DELETE `/api/books/{id}`

## Setup Instructions

1. Clone the repository
   ```bash
   git clone https://github.com/Aman12start/book-author-management.git

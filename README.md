
# Membership App

This project is a CakePHP application developed to meet the requirements of the Turkish Linux Users Association in 2012.

## Features

- User registration and management
- Membership fee tracking
- Event management and notifications
- Customizable roles and permissions

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/omeryildiz/membership-app.git
    ```
2. Navigate to the project directory:
    ```bash
    cd membership-app
    ```
3. Install the dependencies:
    ```bash
    composer install
    ```
4. Configure the database settings in `app/config/database.php`.

5. Run the migrations to set up the database:
    ```bash
    bin/cake migrations migrate
    ```

6. Start the server:
    ```bash
    bin/cake server
    ```

## Usage

- Access the application in your web browser at `http://localhost:8765`.
- Register as a new user or log in with existing credentials.
- Navigate through the dashboard to manage users, track membership fees, and organize events.

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.


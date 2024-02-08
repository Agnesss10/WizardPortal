![Wizard Portal Logo](public/WizardPortalLogo.png)

# Application Information

**Implemented Fields:** Username and Password

**Implemented Features:**
- **Reset Button:** Resets all form fields to their initial or empty values.
- **Submit Button:** Allows users to log in to the Wizard Portal application.
- **Register Button:** Redirects users to a registration form.
- **Registration Page:** A form where users can choose a username and password, with a confirmation for the password.
- **Home Page:** After successful login, users are directed to a personalized account page with a Logout button for logging out.

## Technical Information

- **Framework:** Laravel
- **Recommended PHP Version:** 7.4 or later
- **Database:** MySQL

## How to Run the Application

1. **Clone the Project:**
    ```bash
    git clone https://github.com/Agnesss10/WizardPortalAuth.git
    ```

2. **Install Dependencies:**
    ```bash
    cd auth-app
    composer install
    ```

3. **Configure the .env File:**
    - Copy the `.env.example` file to a new `.env` file and configure the parameters, especially the database settings.
    ```bash
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=wizard_portal_db
      DB_USERNAME=root
      DB_PASSWORD=
    ```

4. **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

5. **Run Database Migrations:**
    ```bash
    php artisan migrate
    ```

6. **Start the Development Server:**
    ```bash
    php artisan serve
    ```

## Username/Password

- Username: m1bigdata
- Password: M1BigData

## Author: Agnès AOUCHCIHE

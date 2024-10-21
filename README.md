## SQL Injection Learning
This project is a demonstration of an application vulnerable to SQL injection and how to prevent it using prepared statements.

- Requirements
PHP 7.4 or higher
MySQL 5.7 or higher

- Installation
Clone the repository:
git clone https://github.com/ArielleBerthe/sql-injection-learning.git
cd sql-injection-learning

## Code Snippet Description

This PHP code snippet is part of a web application that allows users to search a MySQL database by username. The application uses an HTML form to receive user input and then executes an SQL query to retrieve and display the results.

## Code Details

Result Verification
Iteration of Results: If there are results, it iterates through each row and displays the ID and username.
No Results Message: If there are no results, it displays a message indicating “0 results”.
Connection Closure:
The MySQL database connection is closed to free up resources.
HTML Form:
Search Form: An HTML form that allows users to enter a username and submit the request.
GET Method: The form uses the GET method to send data to the same index.php file.
Input Field: A text field where users can enter the username they want to search for.
Submit Button: A button to submit the form and execute the search.
Highlighted Features

Interactivity: Allows users to interact with the database through a web form.
Dynamic: Displays real-time results based on user input.
Simplicity: Clear and concise code that is easy to understand and modify.
Suggested Improvements

Security: Implement prepared statements to prevent SQL injection.
Style: Improve the HTML form design with CSS for a better user experience.
Validation: Add client-side and server-side validation to ensure user input is valid.

<?php

// Solution:

a. To select all columns and rows from the employees table, use the following SQL command:

SELECT * FROM employees;

This command will return all the rows and columns from the employees table.

b. To select only the name and salary columns of all employees with a salary greater than 50000, use the following SQL command:

SELECT name, salary FROM employees WHERE salary > 50000;

This command will return the name and salary columns of all employees whose salary is greater than 50000.

c. To calculate the average salary of all employees, use the following SQL command:

SELECT AVG(salary) FROM employees;

This command will return the average salary of all employees in the employees table.

d. To count the number of employees who work in the "Marketing" department, use the following SQL command:

SELECT COUNT(*) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = 'Marketing');

This command will count the number of employees whose department_id matches the id of the Marketing department in the departments table.

e. To update the salary column of the employee with an id of 1001 to 60000, use the following SQL command:

UPDATE employees SET salary = 60000 WHERE id = 1001;

This command will update the salary of the employee with an id of 1001 to 60000.

f. To delete all employees whose salary is less than 30000, use the following SQL command:

This command will delete all the rows from the employees table whose salary is less than 30000.

a. To select all columns and rows from the departments table, use the following SQL command:

SELECT * FROM departments;

This command will return all the rows and columns from the departments table.

b. To select only the name and manager columns of the "Finance" department, use the following SQL command:

SELECT name, manager FROM departments WHERE name = 'Finance';

This command will return the name and manager columns of the Finance department.

c. To calculate the total number of employees in each department, use the following SQL command:

SELECT departments.name, COUNT(*) FROM employees JOIN departments ON employees.department_id = departments.id GROUP BY departments.name;

This command will return the name of each department along with the count of employees in that department.

d. To insert a new department called "Research" with a manager named "John Doe", use the following SQL command:

INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');

This command will insert a new row in the departments table with the name "Research" and the manager "John Doe".

?>
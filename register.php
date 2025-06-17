
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>Register New User</h2>
    <form action="insert.php" method="post">
        Matric: <input type="text" name="matric" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Role:
        <select name="role" required>
            <option value="">Please select</option>
            <option value="student">Student</option>
            <option value="lecturer">Lecturer</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

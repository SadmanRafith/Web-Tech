<?php include "../control/profile_control.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <h2>Profile</h2>
    <p>Hello, <?php echo htmlspecialchars($_SESSION["fullName"]); ?> | <a href="../Control/logout.php">Logout</a></p>

    <?php if (!empty($userData)): ?>
        <h3>Your Details:</h3>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Gender</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($userData['Fullname']); ?></td>
                <td><?php echo htmlspecialchars($userData['Email']); ?></td>
                <td><?php echo htmlspecialchars($userData['Phone']); ?></td>
                <td><?php echo htmlspecialchars($userData['Birthdate']); ?></td>
                <td><?php echo htmlspecialchars($userData['Gender']); ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>User data not found.</p>
    <?php endif; ?>
</body>
</html>

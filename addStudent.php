<?php
include 'includes/dbconn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Container Main start-->
    <div class="bg-body text-center">
        <div class="text-start">
        <a href="allUsers.php" class="btn btn-primary mt-3">Back</a>
        </div>
        <p class="text-start fw-bold fs-3 my-2">Add New User</p>
        <div class="container">
            <div class="row justify-content-center">
                <form class="text-start" method="POST" action="sqlAddUser.php">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="Text" class="form-control" id="inputName" name="inputName" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputContact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="inputContact" name="inputContact" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputStatus" class="form-label">Status</label>
                        <input type="text" class="form-control" id="inputStatus" name="inputStatus" readonly value="Active">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPosition" class="form-label">Position</label>
                        <select class="form-select" name="inputPosition" required>
                            <option value="Manager">Manager</option>
                            <option value="Inventory Clerk">Inventory Clerk</option>
                            <option value="Cashier" selected>Cashier</option>
                        </select>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" onclick="checkPosition();">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
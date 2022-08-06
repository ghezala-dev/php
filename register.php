<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?>

        <?php if (!isset($_POST['agree'])): ?>

            <?php else: ?>

                <h2>Thank You <?php echo $_POST['firstname']; ?></h2>

                    <? php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>

            <?php endif; ?>

            <?php else: ?>

                        <h2>Registration Form</h2>

                        <form action="registration_form2.php" method="POST">

                            First name:
                            <input type="text" name="firstname">
                            
                            <br> Email:
                            <input type="text" name="email"><br>
                            Age:
                            <input type="number" name="age"><br>
                            Password:
                            <input type="password" name="password">

                            
                            <br> photo upload:
                            <input type="file" name="photo">
                            <br>

                            <input type="hidden" name="form_submitted" value="1" />

                            <input type="submit" value="Submit">

                        </form>
	<?php endif; ?>
</body>
</html>
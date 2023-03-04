<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form | 550690</title>
    <style>
        body {
            font-family: sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
            padding: 32px;
            border: 2px solid #e4e4e4;
            width: 360px;
            border-radius: 16px;
        }
        form div {
            flex-grow: 1;
            overflow: hidden;
        }
        input {
            border: none;
            outline: none;
            border-bottom: 2px solid #e4e4e4;
            padding: 8px 8px 16px 8px;
        }
        .button {
            background: blue;
            color: #ddd;
            font-size: 16px;
            padding: 16px 32px;
            font-weight: 500;
            border-radius: 8px;
        }

    </style>
</head>

<body>
    <!--
        নামঃ তাহিয়া, রোলঃ ৫৫০৬৯০, রেজিষ্ট্রেশন:150212123552,  
        সেশনঃ ২০-২১, ফোন: , ডিপার্টমেন্ট: কম্পিউটার  
    -->
    <form action="insert.php" method="post">
	<div>
		<h1>Student Form</h1>
		<p>Fill out all of the fields!</p>
	</div>
	<input type="text" name="name" placeholder="Your Name..">
	<input type="number" name="roll" placeholder="Your Roll..">
	<input type="number" name="semester" placeholder="Your Semester..">
	<input type="text" name="dept" placeholder="Your Department..">
	<input type="email" name="email" placeholder="Your Email..">
	<input type="submit" class="button" value="Submit">
	<div>
		<i>code by ___</i>
	</div>
</form>
</body>

</html>
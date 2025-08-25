<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body
            {
                font-family: Arial, sans-serif;
                background: #f2f2f2;
                background: url("6.jpg") no-repeat center center fixed;
                background-size: cover; 
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

        .form-container
            {
                background: rgba(255, 255, 255, 0.2); 
                padding: 25px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                width: 280px;
                backdrop-filter: blur(5px); 
            }

        .form-container h2 
            {
                text-align: center;
                margin-bottom: 5px;
                font-weight: bold; 
            }
            
        .form-container label 
            {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

        .form-container input
            {
                width: 90%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #a69999ff;
                border-radius: 5px;
            }

        .form-container select 
            {
                width: 57%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #a69999;
                border-radius: 5px;
                background: white;
            }

        .btn 
            {
                display: block;
                width:  150px;
                padding: 10px;
                background: #f2f2f2;
                color: black;
                text-align: center;
                text-decoration: none;
                border: 1px solid #a69999ff;
                font-size: 16px;
                margin: 0 auto;
                cursor: pointer; 
            }

    </style>
</head>

<body>
        <form action = "display.php" method="post">
            <div class="form-container">
                <h2>Register</h2>
            <form>
                <label for ="IDnum">ID NO:</label>
                <input type="text" id="IDnum" name="IDnum" required> 

                <label for ="FName">First Name:</label>
                <input type="text" id="FName" name="FName" required>

                <label for ="LName">Last Name:</label>
                <input type="text" id="LName" name="LName" required>

        <label for="course">Course:</label>
        <select id="course" name="course" required>
            <option value=""Disabled selected>Select Year Course:</option>

                <option value="BSIT">BSIT</option>
                <option value="BSCS">BSCS</option>
                <option value="ACT">ACT</option>
                <option value="BEED">BEEd</option>
                <option value="BSED">BSEd</option>
                <option value="BSA">BSA</option>
                <option value="BSBA">BSBA</option>
                <option value="BSEE">BSEE</option>
                <option value="BSCPE">BSCPE</option>
                <option value="BSECE">BSECE</option>
                <option value="BSIE">BSIE</option>
                <option value="BSME">BSME</option>
                <option value="BS CRIM">BS CRIM</option>
                <option value="BSCA">BSCA</option>
                <option value="BSHM">BSHM</option>
                <option value="BSTM">BSTM</option>
                <option value="BSN">BSN</option>
                <option value="BSMT">BSMT</option>
                <option value="BS Mar Engg">BS Mar Engg</option>
        </select>

        <label for="year">Year:</label>
        <select id="year" name="year" required>
            <option value=""Disabled selected>Select Year Level:</option>

                <option value="1st">1st Year</option>
                <option value="2nd">2nd Year</option>
                <option value="3rd">3rd Year</option>
                <option value="4th">4th Year</option>
        </select>
        
        <button class="btn" type="submit">Submit</button>
            </form>
</body>

</html>
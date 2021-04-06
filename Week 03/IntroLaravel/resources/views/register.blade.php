<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <label>First Name:</label><br /><br />
        <input type="text" name="firstname" /><br /><br />

        <label>Last Name:</label><br /><br />
        <input type="text" name="lastname" /><br /><br />

        <label>Gender:</label><br /><br />
        <input type="radio" name="gender" />Male<br />
        <input type="radio" name="gender" />Female<br />
        <input type="radio" name="gender" />Other<br /><br />

        <label>Nationality:</label><br /><br />
        <select name="Nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singapore">Singapore</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select>
        <br /><br />
        <label>Language Spoken:</label><br /><br />
        <input type="checkbox" />Bahasa Indonesia<br />
        <input type="checkbox" />English<br />
        <input type="checkbox" />Other<br /><br />

        <label>Bio:</label><br /><br />
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br /><br />

        <button type="submit" href>Sign Up</button>
    </form>
</body>

</html>

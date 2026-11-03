
<!DOCTYPE html>
<html>

<head>
    <title>Create Student</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #007bff;
        }

        button, .back-btn {
            display: inline-block;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        button {
            background: #007bff;
            color: white;
        }

        button:hover {
            background: #0056b3;
        }

        .back-btn {
            background: #6c757d;
            color: white;
            margin-left: 5px;
        }

        .back-btn:hover {
            background: #545b62;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Student Form</h1>

        <form action="{{ route('students.store') }}" method="POST">

            @csrf

            <label>Student ID</label>
            <input type="text"
                   name="student_id"
                   value="{{ old('student_id') }}"
                   required>

            <label>Student Name</label>
            <input type="text"
                   name="name"
                   value="{{ old('name') }}"
                   required>

            <label>Address</label>
            <input type="text"
                   name="address"
                   value="{{ old('address') }}">

            <button type="submit">
                Save Student
            </button>

            <a href="{{ route('students.index') }}" class="back-btn">
                Back to Student List
            </a>

        </form>

    </div>

</body>

</html>

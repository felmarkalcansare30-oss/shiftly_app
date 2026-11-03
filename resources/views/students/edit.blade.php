
<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>

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

        button {
            background: #007bff;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background: #0056b3;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .back-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Edit Student</h1>

        <form action="{{ route('students.update', $student) }}" method="POST">

            @csrf
            @method('PUT')

            <label>Student ID</label>
            <input type="text"
                   name="student_id"
                   value="{{ old('student_id', $student->student_id) }}"
                   required>

            <label>Student Name</label>
            <input type="text"
                   name="name"
                   value="{{ old('name', $student->name) }}"
                   required>

            <label>Address</label>
            <input type="text"
                   name="address"
                   value="{{ old('address', $student->address) }}">

            <button type="submit">
                Update Student
            </button>

        </form>

        <a href="{{ route('students.index') }}" class="back-btn">
            ← Back to Student List
        </a>

    </div>

</body>

</html>

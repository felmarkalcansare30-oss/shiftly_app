
<!DOCTYPE html>
<html>

<head>
    <title>Students</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .add-btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .add-btn:hover {
            background: #0056b3;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #f8f9fa;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .student-info {
            flex: 1;
        }

        .edit-btn {
            background: #ffc107;
            color: #333;
            padding: 7px 12px;
            text-decoration: none;
            border-radius: 5px;
        }

        .delete-btn {
            background: #dc3545;
            color: white;
            padding: 7px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-btn:hover {
            background: #e0a800;
        }

        .delete-btn:hover {
            background: #c82333;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Student List</h1>

        <a href="{{ route('students.create') }}" class="add-btn">
            + Add Student
        </a>

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <ul>
            @foreach ($students as $student)
                <li>
                    <div class="student-info">
                        {{ $student->student_id }} |
                        {{ $student->name }} |
                        {{ $student->address }}
                    </div>

                    <a href="{{ route('students.edit', $student) }}" class="edit-btn">
                        Edit
                    </a>

                    <form action="{{ route('students.destroy', $student) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="delete-btn"
                                onclick="return confirm('Are you sure you want to delete this student?')">
                            Delete
                        </button>

                    </form>
                </li>
            @endforeach
        </ul>

    </div>

</body>
</html>

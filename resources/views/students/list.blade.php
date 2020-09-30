<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo student list</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="header">Header login</h1>
    </header>
    List
    <table border='1' class='table'>
        <thead>
            <th>Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Active</th>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->age }} </td>
                <td>
                    @if ($student->gender == 0)
                    Female
                    @elseif ($student->gender == 1)
                    Male
                    @else
                    Nothing
                    @endif
                </td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->is_active == 1 ? 'Yes' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <footer>Footer login@\</footer>
</body>

</html>
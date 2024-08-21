<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .document-list {
            margin-top: 20px;
        }

        .document-list table {
            width: 100%;
            border-collapse: collapse;
        }

        .document-list table, .document-list th, .document-list td {
            border: 1px solid #dee2e6;
        }

        .document-list th, .document-list td {
            padding: 10px;
            text-align: left;
        }

        .document-list th {
            background-color: #f1f1f1;
        }

        .document-list td a {
            color: #007bff;
            text-decoration: none;
        }

        .document-list td a:hover {
            text-decoration: underline;
        }

        .document-list form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Document Management</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('user.document.upload') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Document Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="file">File:</label>
                <input type="file" id="file" name="file" required>
            </div>
            <div class="form-group">
                <button type="submit">Upload Document</button>
            </div>
        </form>

        <div class="document-list">
            <h2>Uploaded Documents</h2>
            @if($documents->isEmpty())
                <p>No documents found.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>File</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td>{{ $document->name }}</td>
                                <td><a href="{{ Storage::url($document->file_path) }}" target="_blank">View</a></td>
                                <td>
                                    <form method="POST" action="{{ route('user.document.delete', $document->id) }}" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this document?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</body>
</html>
@include('layouts.usr')
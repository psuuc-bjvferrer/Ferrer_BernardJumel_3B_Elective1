<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .btn-submit {
            background-color: #343a40;
            color: white;
        }
        .btn-submit:hover {
            background-color: #495057;
        }
        .form-label {
            font-weight: bold;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 class="text-center">Personal Information</h1>
        <hr>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li class="error-message">{{ $error }}</li>
                @endforeach 
            </ul>
        @endif

        <form action="{{ route('form.submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" name="firstname" id="firstname" class="form-control" value="{{ old('firstname') }}" required maxlength="50">
                @error('firstname')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname') }}" required maxlength="50">
                @error('lastname')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Sex</label>
                <div>
                    <input type="radio" name="Sex" value="male" id="male" {{ old('Sex') == 'male' ? 'checked' : '' }} required>
                    <label for="male">Male</label>
                    <input type="radio" name="Sex" value="female" id="female" {{ old('Sex') == 'female' ? 'checked' : '' }}>
                    <label for="female">Female</label>
                </div>
                @error('Sex')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Mobilephone" class="form-label">Mobile Phone</label>
                <input type="tel" name="Mobilephone" id="Mobilephone" class="form-control" value="{{ old('Mobilephone') }}" required pattern="09[0-9]{2}-[0-9]{3}-[0-9]{4}" placeholder="e.g., 0989-123-4567">
                @error('Mobilephone')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Telephone-Number" class="form-label">Tel No.</label>
                <input type="tel" name="Telephone-Number" id="Telephone-Number" class="form-control" value="{{ old('Telephone-Number') }}" required pattern="[0-9]+">
                @error('Telephone-Number')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Birthdate" class="form-label">Birthdate</label>
                <input type="date" name="Birthdate" id="Birthdate" class="form-control" value="{{ old('Birthdate') }}" required>
                @error('Birthdate')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" name="Address" id="Address" class="form-control" value="{{ old('Address') }}" required maxlength="100">
                @error('Address')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" name="Email" id="Email" class="form-control" value="{{ old('Email') }}" required maxlength="100">
                @error('Email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Website" class="form-label">Website</label>
                <input type="url" name="Website" id="Website" class="form-control" value="{{ old('Website') }}" required>
                @error('Website')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-submit">Submit</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (optional for Bootstrap features like dropdowns, modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

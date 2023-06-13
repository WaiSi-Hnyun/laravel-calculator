<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <form id="calcForm" method="POST">
            @csrf
            <h1 class="title">Number Calculation</h1>
            <div class="form-group">
                <label for="first_num">First Number</label>
                <input type="text" name="first_num" id="first_num" value="{{ old('first_num') }}">
                @error('first_num')
                    <small class="errorMsg1">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="form-group">
                <label for="sec_num">Second Number</label>
                <input type="text" name="sec_num" id="sec_num" value="{{ old('sec_num') }}">
                @error('sec_num')
                    <small class="errorMsg2">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="form-group">
                <span class="total">Total</span>
                @if (session()->has('result'))
                    <span>{{ session('result') }}</span>
                @endif
            </div>
            <div class="btn-group">
                <button type="submit" name="operator" value="add">Sum</button>
                <button type="submit" name="operator" value="multiply">Multiply</button>
                <button type="submit" name="operator" value="divide">Divide</button>
            </div>
        </form>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

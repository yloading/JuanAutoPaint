<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Juan Auto Paint</title>

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        {{-- JS --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        {{-- jQuery --}}
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">

        <div class="container">

            <form id="registrationForm">
                <div class="text-center" style="padding-top: 30px">
                    <h1>New Paint Job</h1>
                </div>
                <div class="form-row">
                    <div class="col-3">
                        Plate No. <input type="text" class="form-control" id="platenumber" placeholder="" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3">Current Color
                        <select class="custom-select" id="currentcolor" required>
                            <option value=""></option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3">
                        Target Color
                        <select class="custom-select" id="targetcolor" required>
                            <option value=""></option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                </div>
                <div class="text-left" style="padding-top: 30px">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </body>

    <script src="./js/home.js"></script>
</html>

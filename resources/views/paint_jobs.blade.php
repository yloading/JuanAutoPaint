<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    
    <title>Paint Jobs</title>
</head>
<body>
    
    <div class="container">
        <div class="row">

            <div class="col-7">
                <h1>Paint Jobs in Progress</h1>
                <h2>Car Details</h2>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Plate No.</th>
                            <th>Current Color</th>
                            <th>Target Color</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="firstFive">
        
                    </tbody>
        
                </table>
            </div>
            <div class="col-3">
                <h1>Shop Performance</h1>
                <span id="totalCarPainted"></span>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="row">
            <div class="col-7">
                <h1>Paint Jobs in Queue</h1>
                <h2>Car Details</h2>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Plate No.</th>
                            <th>Current Color</th>
                            <th>Target Color</th>
                        </tr>
                    </thead>
                    <tbody id="inQueue">
        
                    </tbody>
        
                </table>           
            </div>
        </div>
        <div class="text-right">
            <a class="btn btn-success btn-lg" href="/" role="button">Back</a>
        </div> 
    </div>

</body>
<script src="./js/paintjobs.js"></script>
</html>
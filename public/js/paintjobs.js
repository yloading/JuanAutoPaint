function capitalize(s) {
    if (typeof s !== 'string') return ''
    return s.charAt(0).toUpperCase() + s.slice(1)
}

$(document).ready(function() {
    $.ajax({
        url: 'api/get',
        type: "GET",
        data:{ 
            _token:'{{ csrf_token() }}'
        },
        cache: false,
        dataType: 'json',
        success: function(response) {
            var firstFive = '';
            var inQueue = '';
            var data = response;
            $.each(data, function(i) {
                if (i <= 4) {
                    firstFive += "<tr>";
                    firstFive += "<td>" + capitalize(data[i].platenumber) + "</td><td>" + data[i].currentcolor + "</td><td>" 
                    + data[i].targetcolor + "</td><td><button>Mark as complete</button></td>";
                    firstFive += "</tr>"                    
                }else{
                    inQueue += "<tr>";
                    inQueue += "<td>" + capitalize(data[i].platenumber) + "</td><td>" + data[i].currentcolor + "</td><td>" 
                    + data[i].targetcolor + "</td>";
                    inQueue += "</tr>"   
                }
            })
            $("#firstFive").append(firstFive)
            $("#inQueue").append(inQueue)
        }
        
    });


    $.ajax({
        url: 'api/get/all-cars',
        type: "GET",
        data:{ 
            _token:'{{ csrf_token() }}'
        },
        cache: false,
        dataType: 'json',
        success: function(response) {
            $("#totalCarPainted").append("Total Cars Painted: "+response.length)
        }
        
    });
});
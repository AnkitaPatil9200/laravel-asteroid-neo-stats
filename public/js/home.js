// function that runs when DOM is ready
$(document).ready(function () {

    // added datepicker
    $('.date').datepicker({
        format: 'dd-mm-yyyy'
    });

    // submits date form
    $(document).on('submit', '#form-date-filter-asteroids-data', function (event) {
        event.preventDefault();
        // display ajax loader
        $('.overlay-spinner').removeClass('hide');

        // collect form data
        var formData = new FormData(this);

        // ajax request to get data
        $.ajax({
            url: '/date-filter-asteroids-data',
            method: 'POST',
            dataType: 'json',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                // remove ajax loader
                $('.overlay-spinner').addClass('hide');

                // clear alert message data
                $('#ajax-alert-message').removeClass().text('');

                if (response.status) { // success response

                    // display success alert message
                    $('#ajax-alert-message').addClass('alert alert-success').text(response.message);

                    // place response data for fastest asteroid
                    $('#fa_id').text('ID : ' + response.data.fastest_asteroid_data.id);
                    $('#fa_speed').text('Speed : ' + response.data.fastest_asteroid_data.speed + ' Km/hr');
                    $('#fa_size').text('Average Size : ' + response.data.fastest_asteroid_data.average_size + ' Km');

                    // place response data for closest asteroid
                    $('#ca_id').text('ID : ' + response.data.closest_asteroid_data.id);
                    $('#ca_distance').text('Distance : ' + response.data.closest_asteroid_data.distance + ' Km');
                    $('#ca_size').text('Average Size : ' + response.data.closest_asteroid_data.average_size + ' Km');

                    // load chart
                    loadNeoStatChart(response.data.chart_data.x_axis_data, response.data.chart_data.y_axis_data);
                } else {
                    // display error alert message
                    $('#ajax-alert-message').addClass('alert alert-danger');
                    if (typeof (response.message) != "undefined" && response.message !== null) {
                        $('#ajax-alert-message').text(response.message);
                    } else {
                        $('#ajax-alert-message').text('Something went wrong.');
                    }
                }
            },
            error: function (xhr) {
                // remove ajax loader
                $('.overlay-spinner').addClass('hide');

                // display error alert message
                $('#ajax-alert-message').removeClass().addClass('alert alert-danger').text('Something went wrong.');
            },
        });
    });
});

// declare chart variable
var neoStatChart;

function loadNeoStatChart($x, $y) {

    // destroy previous instance of chart
    if (typeof neoStatChart !== "undefined") {
        neoStatChart.destroy();
    }

    // define context
    const ctx = document.getElementById('neoStatChart');

    // define config
    const config = {
        type: 'line',
        data: {
            labels: $x,
            datasets: [{
                label: 'Number of Asteroids passing near the Earth',
                data: $y,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    }

    // draw chart
    neoStatChart = new Chart(ctx, config);
}
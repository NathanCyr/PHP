function getCars() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
                function (cars) {
                    var carTable = $('#carData');
                    carTable.empty();
                    var count = 1;
                    $.each(cars.data, function (key, value)
                    {
                        var editDeleteButtons = '</td><td>' +
                                '<a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editCar(' + value.id + ')"></a>' +
                                '<a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm(\'Are you sure to delete data?\') ? carAction(\'delete\', ' + value.id + ') : false;"></a>' +
                                '</td></tr>';
                        carTable.append('<tr><td>' + value.id + '</td><td>' + value.name + '</td><td>' + editDeleteButtons);
                        count++;
                    });

                }
    });
}

/* Function takes a jquery form
 and converts it to a JSON dictionary */
function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}



function carAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var carData = '';
    var ajaxUrl = urlToRestApi;
    if (type == 'add') {
        requestType = 'POST';
        carData = convertFormToJSON($("#addForm").find('.form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
		ajaxUrl = ajaxUrl + "/" + idEdit.value;
        carData = convertFormToJSON($("#editForm").find('.form'));
		
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    $.ajax({
        type: requestType,
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(carData),
        success: function (msg) {
            if (msg) {
                alert('Car data has been ' + statusArr[type] + ' successfully.');
                getCars();
                $('.form')[0].reset();
                $('.formData').slideUp();
                window.location.reload(true); 
            } else {
                alert('Some problem occurred, please try again.');
            }
        }
    });
}


function editCar(id) {
    $.ajax({
        type: 'GET',
        dataType: 'JSON',
        url: urlToRestApi+ "/" + id,
        success: function (data) {
            $('#idEdit').val(data.data.id);
            $('#car_manufacturer_codeEdit').val(data.data.car_manufacturer_code);
            $('#car_year_of_manufactureEdit').val(data.data.car_year_of_manufacture);
            $('#modelEdit').val(data.data.model);
            $('#other_car_detailsEdit').val(data.data.other_car_details);
            $('#editForm').slideDown();
        }
    });
}
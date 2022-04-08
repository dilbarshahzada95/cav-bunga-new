
function addNewField(val) {
    if (val) {

        var id = $("#vehicle_table tbody  tr:last input[name=row_count]").val();

        if (id == undefined) {
            var r_count = 1;
        } else {
            var r_count = parseInt(id) + 1;

        }
        var html = '';
        html = '<tr class="var_row">' + '<td><div class="form-group">' + r_count + '</div></td><td><div class="form-group"><input  type="text" name="featured[' + r_count + '][title]" class="form-control" autocomplete="off" placeholder="Enter Title" required></div></td>';
        html += '<td><div class="form-group"><textarea  name="featured[' + r_count + '][description]" class="form-control"   required></textarea></div></td>';
        html += '<td><div class="form-group"><input type="file"  name="featured[' + r_count + '][image]" class="form-control"   required></div></td>';

        html += '<td> <a type="button" class="btn bg-gradient-danger btn-sm" onclick="removeField(this)">Close</a><input type="hidden" name="row_count"  value="' + r_count + '"></td></tr>';
        var count_table_tbody_tr = $("#vehicle_table tbody tr").length;
        if (count_table_tbody_tr >= 1) {
            $("#vehicle_table tbody tr:last").after(html);
        } else {

            $("#vehicle_table tbody").html(html);
        }
    }
}
// Rmove row
function removeField(val) {
    $(val).closest('.var_row').remove();

}

function editremoveField(val, id) {
    $(val).closest('.var_row').remove();
    $.ajax({

        url: 'admin/product/delete_featured/' + id,
        method: 'get',
        dataType: 'json',
        success: function (response) {
            return true;

        }
    });

}

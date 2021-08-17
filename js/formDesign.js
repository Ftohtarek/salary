let id = 0;
buildDesign();

$('#addRow').click(addRow);

$('.sub').blur(function () {
    if ($(this).val() != '') {
        let id = $(this).attr('name')[3]
        $('.degree').eq(id).attr('required', 'required')
    }
})
$('#submit').click(function () {
    let degree = $('.degree')
    for (let i = 0; i < degree.length; i++) {
        if (degree.eq(i).val() != '') {
            $('#printData').html("")
            return 0;
        }
    }
    $('#printData').html('<h1>  مستني اي يحصل طيب دخل داتا متشلنيش</h1>')
    $('.degree').eq(0).attr('required', 'required')
})

function buildDesign(number = 5) {
    for (let i = 0; i < number; i++) {
        addRow()
    }
}

function addRow() {
    let row = ` 
           <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control sub" type="text" name="sub${id}" placeholder="Subject Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control degree" type="number" name="degree${id}" placeholder="Degree">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select id="hour" class="form-control hour" name="hour${id}">
                                    <option selected>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>`

    $('.tableBody').append(row)
    id++;
}

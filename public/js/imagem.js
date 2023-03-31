function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(75)
                .height(75);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
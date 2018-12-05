$('#add').click(function (){
        var value = $('#title').val();
        $('ol').append('<li>' + value + '</li>');
        console.log(value);
});
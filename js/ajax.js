$('#add').submit(function(){
    event.preventDefault();
    const $form = $(this);
    const $input = $form.find('input, select, button');

    const series = $form.serialize();

    $input.prop('disabled', true);

    request = $.ajax({
        url: 'handle/add.php',
        type: 'post',
        data: series,
    });

    request.done(function(res){
        if(res == "success"){
            alert("Pesma je uspesno dodata!");
            location.reload(true);
        }else{
            alert("Pesma nije dodata!");
        }
    });

})

$('.alert').click(function(){

    const input = $(this).closest('tr').find('input');
    value = input.val();

    request = $.ajax({
        url: 'handle/delete.php',
        type: 'post',
        data: {'deleteid': value},
    });

    request.done(function(res){
        if(res == "success"){
            input.closest('tr').remove();
            alert("Pesma je uspesno izbrisana!");
            location.reload(true);
        }else{
            alert("Pesma nije izbrisana!");
        }
    });

})
$('#dugme').click(function(){

    document.getElementById("popupadd").style.display = "block";
})

$('.warning').click(function(){

    document.getElementById("popupedit").style.display = "block";

    const input = $(this).closest('tr').find('input');
    value = input.val();

    request = $.ajax({
        url: 'handle/load.php',
        type: 'post',
        data: {'loadid': value},
        dataType: 'json'
    });

    request.done(function(res){

        const artist = document.getElementById("eartist");
        artist.value = res['artist'];

        const songname = document.getElementById("esong");
        songname.value = res['songname'];

        const date = document.getElementById("edate");
        date.value = res['date'];

        const rank = document.getElementById("erank");
        rank.value = res['rank'];

        const id = document.getElementById("eid");
        id.value = res['id'];

    });

})

$('#edit').submit(function(){
    event.preventDefault();
    const $form = $(this);
    const $input = $form.find('input, select, button');

    const series = $form.serialize();
    $input.prop('disabled', true);

    request = $.ajax({
        url: 'handle/update.php',
        type: 'post',
        data: series,
    });

    request.done(function(res){
        if(res == "success"){
            alert("Pesma je uspesno izmenjena!");
            location.reload(true);
        }else{
            alert("Pesma nije izmenjena!");
        }
    });

})




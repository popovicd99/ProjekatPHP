function detalji(field) {

    document.getElementById("popupedit").style.display = "block";

    const input = $(field).closest('tr').find("input");
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

    });
}
function search(value) {
    request = $.ajax({
        url: 'handle/search.php',
        type: 'post',
        data: {'search': value},
    });

    request.done(function(res){
        let songs = JSON.parse(res);
        let html = "";
        if(songs!=null){
            songs.forEach(($row) => {
                html +=`
                <tr class="table-expand-row" data-open-details>
                    <td>${$row.artist}</td>
                    <td>${$row.songname}</td>
                    <td class="text-right">${$row.categoryname}</td>
                    <td>${$row.date}</td>
                    <td>${$row.rank}</td>
                    <input type="hidden" value="${$row.id}">
                    <td>
                        <button class="button" onclick="detalji(this)">Details</button>
                    </td>
                </tr>`;
            });
        }

        document.getElementById("test").innerHTML = html;

    });
}

$('.filter').click(function(){

    let value = $(this).val();

    request = $.ajax({
        url: 'handle/filter.php',
        type: 'post',
        data: {'filter': value},
    });

    request.done(function(res){
        let songs = JSON.parse(res);
        let html = "";
        if(songs!=null){
            songs.forEach(($row) => {
                html +=`
                <tr class="table-expand-row" data-open-details>
                    <td>${$row.artist}</td>
                    <td>${$row.songname}</td>
                    <td class="text-right">${$row.categoryname}</td>
                    <td>${$row.date}</td>
                    <td>${$row.rank}</td>
                    <input type="hidden" value="${$row.id}">
                    <td>
                        <button class="button" onclick="detalji(this)">Details</button>
                    </td>
                </tr>`;
            });
        }

        document.getElementById("test").innerHTML = html;

    });

})
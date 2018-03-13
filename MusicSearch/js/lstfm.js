$(document).ready(function () {
    $('.item').imagefill({runOnce:true}); 

    String.prototype.capitalize = function() {
        return this.charAt(0).toUpperCase() + this.slice(1);
    }

    function getResults(term, type){
      
        if(term.length >= 3){

            if($('.loader').length == 0){
                $("#result" + type.capitalize()).prepend("<div class='loader'><p>Loading...</p></div>");
            }else {
                $('.loader').show();
            }
            
           $.ajax({
            type: "GET",
            url: "libraries/ajax.functions.php",
            data: type + "Term=" + term,
            success: function(result){
                if(result != 'No results'){
                    $("#result" + type.capitalize()).html(result);
                    $('#result'+ type.capitalize() +' .item').imagefill({runOnce:true}); 
                }
                $('.loader').hide();
            }
        });
       }else {
        $("#result" + type.capitalize()).empty();
        $('.loader').hide();
        }
    }
    
    $("#trackSearch").on("keyup", function(e){
      var search = $(this).val();
      getResults(this.value, 'track');
    });

    $("#artistSearch").on("keyup", function(e){
      var search = $(this).val();
      getResults(this.value, 'artist');
    });

    $("#albumSearch").on("keyup", function(e){
      var search = $(this).val();
      getResults(this.value, 'album');
    });



});

function getYTLink(title, artist){
    $.ajax({
        type: "GET",
        url: "libraries/ajax.functions.php",
        data: "ytTitle=" + title + "&ytArtist=" + artist,
        success: function(result){
            ytIds = JSON.parse(result);
            window.location.href = 'http://www.youtube.com/watch?v='+ytIds.id;
        }
    });
}

$(document).ready(function(){
    $("#button2").click(function(){
        $("#div2").load("ReadMe.txt");
    });
});


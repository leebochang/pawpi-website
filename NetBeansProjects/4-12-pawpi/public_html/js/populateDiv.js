
//every time page reloads(or first time on home page), show all results
$( document ).ready(function() {
    //updateResults('all');
    var myJASON = [
         {"name":"Patrick", "img_url":"./img/englishbulldog.png"},
         {"name":"Cody", "img_url":"./img/my-dog.jpg"},
         {"name":"Laura", "img_url":"./img/mylogocat.png"},
         {"name":"Patrick", "img_url":"./img/standard-dog.jpg"}, 
         {"name":"Patrick", "img_url":"./img/englishbulldog.png"},
         {"name":"Cody", "img_url":"./img/my-dog.jpg"},
         {"name":"Laura", "img_url":"./img/mylogocat.png"},
         {"name":"Patrick", "img_url":"./img/standard-dog.jpg"}, 
         {"name":"Patrick", "img_url":"./img/englishbulldog.png"},
         {"name":"Cody", "img_url":"./img/my-dog.jpg"},
         {"name":"Laura", "img_url":"./img/mylogocat.png"},
         {"name":"Patrick", "img_url":"./img/standard-dog.jpg"}
        ];
  /*  $.ajax({
        url: url,
        type: "POST",
        data: JSON.stringfy(myJASON),
        complete: callback
    }); */
    showResults(myJASON);
});
$( '#search_button' ).click(function(){
            //updateResults('all');
});
//These functions are when page is not reloading, static page
function showFilter(data){         
    var fields= JSON.parse(data);      
    var box="";
    $.each(fields, function(field , obj) {
        box += '<div class="row">';
        box += '<div class="filter-first">';
        box += '<a href="#add" class="filter-by-type">'+ field + '</a></div>';
        $.each(obj, function(subf , count) {
        //if count ==0 then dont display checkbox
            if(count >0){
                box +='<div class="checkbox ">'; 
                box +='<label id="subfields">';
                box +='<input type="checkbox" name='+ field +' value='+ subf +'>'+ subf + "("+count+")";
                box +='</label></div>';
            }
        });
        box += '</div>';
        });
        document.getElementById("filterbox").innerHTML= box; 
}      
//These functions are when page is not reloading, static page
function showResults(data){
    var animals = data;
    var length  = animals.length;
    var box="";
    var my_id, my_name, i=0;
    //$.each(animals, function(k , v) {
    for(var j = 0; j < length; j++){
        my_id  = j.toString();
        my_name= animals[j].name;
        my_url = animals[j].img_url;
        box += "<div class='col-xs-4' id='append" + my_id + "'>";
        box +=  "<div class='col-xs-12 img-border'>";
        box +=      "<div class='row'>";
        box +=          "<a href='#and'><span id='pet-name" + my_id + "'>"+ my_name + "</span></a>";
        box +=      "</div>";
        box +=      "<span class='img-wrapper'>";
        box +=      "<img src='" + my_url + "' class='mythumbnail' alt='doggie'/>";
        box +=      "<a class='button-overlay' href='#'>";
        box +=          "<span class='glyphicon glyphicon-heart'></span>";
        box +=      "</a>";
        box +=      "</span>";
        box +=  "</div>";
        box += "</div>";
        i++;
    };
    document.getElementById('imgGallery').innerHTML+=box;
    document.getElementById('totalResults').innerHTML +="Total Results: "+i.toString();
}
//Store all checked options in opts array
function getFilterOptions(){
    var opts = {};
    $checkboxes.each(function(){
        if(this.checked){
            alert(this.name);
            opts[this.name]= this.value;    
        }
    });
    opts = JSON.stringify(opts);
    return opts;
}
/*function updateResults(keyword,opts){
    //post to index, get results and showResults
    $.ajax({
        type: "POST",
        url: "../searching.php",
        data: {search: keyword, filterOpts: opts},
        dataType : 'html',
        success: function(data) {        
            var matches = data.substr(0, data.indexOf('{"Animals":')); 
            // var fil = data.substr(data.indexOf('{"Animals":'), data.indexOf("3}}")); 
            var filter_data = data.match('{"Animals":(.*)}}');
            //insert the formatted div in the show results div
            showResults(matches);
            //update Filter labels for the next query
            showFilter(filter_data[0]);
        },
        //error: function(xhr, textStatus, errorThrown) {
            //alert("Fail");
       // }
    });
}

*/
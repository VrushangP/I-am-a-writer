$(document).ready(function () {
    console.log("Hello World");
    
    $("#g4snakeman").click(function() {
        console.log("Button was clicked!");
    });
      
    // $("#g4snakeman").click(function() {
    //     $.ajax({
    //       url: "https://nekos.best/api/v2/neko",
    //       type: "GET",
    //       success: function(data) {
    //         if (data.results) {
    //             var parsedData = data.results;
    //             $("#imageElement").attr("src", parsedData[0].url);
    //         }
    //       },
    //       error: function() {
    //         alert("Error occurred");
    //       }
    //     });
    // });
});
 
var dataURL = "photo.json";

$(document).ready(function () {
    getImage();
    $("#0").on('click', function () {
        document.getElementById("card-container").innerHTML = "";//清空*
        getImage();
    }),
    
    $("#1").on('click', function () {
        document.getElementById("card-container").innerHTML = "";//清空*
        $.ajax({
            url: dataURL,
            method: 'GET',
            dataType: 'json',
            data: '',
            async: true,
            success: function (data) {

                var dataLength = data.games.length;
                //category
                //category
                for (var i = 0; i < dataLength; i++) {
                    //col

                    if (data.games[i]["category_id"] == data.categories[0]) {
                        var cardCol = $("<div>");
                        cardCol.addClass("col");

                        //card
                        var cardDiv = $("<div>");
                        cardDiv.addClass("card");

                        //card body
                        var cardBody = $("<div>");
                        cardBody.addClass("card-body");

                        //text-center
                        var textCenter = $("<h5>");
                        textCenter.addClass("text-center");
                        textCenter.html(data.games[i]['name']);


                        //image
                        var linkImg = $("<a>");
                        linkImg.attr("href", data.games[i]['link']);
                        var cardImg = $("<img>");
                        cardImg.attr("src", data.games[i]['img']);
                        cardImg.addClass("card-img-top");

                        //price
                        var cardPrice = $("<a>");
                        cardPrice.attr("href", data.games[i]['main']);
                        cardPrice.html("<p>地圖連結:</p><br>");

                        //category
                        var cardCategory = $("<p>");
                        cardCategory.addClass("category");
                        cardCategory.html("<b>類別</b><br>" + data.games[i]["category_id"]);

                        //出現在畫面上
                        cardBody.append(
                            textCenter,
                            cardPrice,
                            cardCategory
                        );
                        linkImg.append(
                            cardImg
                        );

                        cardDiv.append(
                            linkImg,
                            cardBody
                        );

                        cardCol.append(
                            cardDiv
                        );

                        $("#card-container").append(cardCol);
                    }
                }
            },
            error: function () {
                alert("request error !");
            },
        });
    });

    $("#2").on('click', function () {
        document.getElementById("card-container").innerHTML = "";//清空*
        $.ajax({
            url: dataURL,
            method: 'GET',
            dataType: 'json',
            data: '',
            async: true,
            success: function (data) {

                var dataLength = data.games.length;
                //category
                //category
                for (var i = 0; i < dataLength; i++) {
                    //col

                    if (data.games[i]["category_id"] == data.categories[1]) {
                        var cardCol = $("<div>");
                        cardCol.addClass("col");

                        //card
                        var cardDiv = $("<div>");
                        cardDiv.addClass("card");

                        //card body
                        var cardBody = $("<div>");
                        cardBody.addClass("card-body");

                        //text-center
                        var textCenter = $("<h5>");
                        textCenter.addClass("text-center");
                        textCenter.html(data.games[i]['name']);


                        //image
                        var linkImg = $("<a>");
                        linkImg.attr("href", data.games[i]['link']);
                        var cardImg = $("<img>");
                        cardImg.attr("src", data.games[i]['img']);
                        cardImg.addClass("card-img-top");


                        //price
                        var cardPrice = $("<p>");
                        cardPrice.html("<b>說明:</b><br>"+ data.games[i]["price"]);

                        //category
                        var cardCategory = $("<p>");
                        cardCategory.addClass("category");
                        cardCategory.html("<b>類別</b><br>" + data.games[i]["category_id"]);

                        //出現在畫面上
                        cardBody.append(
                            textCenter,
                            cardPrice,
                            cardCategory
                        );
                        linkImg.append(
                            cardImg
                        );

                        cardDiv.append(
                            linkImg,
                            cardBody
                        );

                        cardCol.append(
                            cardDiv
                        );

                        $("#card-container").append(cardCol);
                    }
                }
            },
            error: function () {
                alert("request error !");
            },
        });
    });

    $("#3").on('click', function () {
        document.getElementById("card-container").innerHTML = "";//清空*
        $.ajax({
            url: dataURL,
            method: 'GET',
            dataType: 'json',
            data: '',
            async: true,
            success: function (data) {

                var dataLength = data.games.length;
                //category
                //category
                for (var i = 0; i < dataLength; i++) {
                    //col

                    if (data.games[i]["category_id"] == data.categories[2]) {
                        var cardCol = $("<div>");
                        cardCol.addClass("col");

                        //card
                        var cardDiv = $("<div>");
                        cardDiv.addClass("card");

                        //card body
                        var cardBody = $("<div>");
                        cardBody.addClass("card-body");

                        //text-center
                        var textCenter = $("<h5>");
                        textCenter.addClass("text-center");
                        textCenter.html(data.games[i]['name']);


                        //image
                        var linkImg = $("<a>");
                        linkImg.attr("href", data.games[i]['link']);
                        var cardImg = $("<img>");
                        cardImg.attr("src", data.games[i]['img']);
                        cardImg.addClass("card-img-top");


                        //price
                        var cardPrice = $("<p>");
                        cardPrice.html("<b>說明:</b>" +"<br>"+ data.games[i]["price"]);

                        //category
                        var cardCategory = $("<p>");
                        cardCategory.addClass("category");
                        cardCategory.html("<b>類別</b><br>" + data.games[i]["category_id"]);

                        //出現在畫面上
                        cardBody.append(
                            textCenter,
                            cardPrice,
                            cardCategory
                        );
                        linkImg.append(
                            cardImg
                        );

                        cardDiv.append(
                            linkImg,
                            cardBody
                        );

                        cardCol.append(
                            cardDiv
                        );

                        $("#card-container").append(cardCol);
                    }
                }
            },
            error: function () {
                alert("request error !");
            },
        });
    });

    $("#4").on('click', function () {
        document.getElementById("card-container").innerHTML = "";//清空*
        $.ajax({
            url: dataURL,
            method: 'GET',
            dataType: 'json',
            data: '',
            async: true,
            success: function (data) {

                var dataLength = data.games.length;
                //category
                //category
                for (var i = 0; i < dataLength; i++) {
                    //col

                    if (data.games[i]["category_id"] == data.categories[3]) {
                        var cardCol = $("<div>");
                        cardCol.addClass("col");

                        //card
                        var cardDiv = $("<div>");
                        cardDiv.addClass("card");

                        //card body
                        var cardBody = $("<div>");
                        cardBody.addClass("card-body");

                        //text-center
                        var textCenter = $("<h5>");
                        textCenter.addClass("text-center");
                        textCenter.html(data.games[i]['name']);


                        //image
                        var linkImg = $("<a>");
                        linkImg.attr("href", data.games[i]['link']);
                        var cardImg = $("<img>");
                        cardImg.attr("src", data.games[i]['img']);
                        cardImg.addClass("card-img-top");


                        //price
                        var cardPrice = $("<p>");
                        cardPrice.html("<b>說明:</b><br>" + data.games[i]["price"]);
                        

                        //category
                        var cardCategory = $("<p>");
                        cardCategory.addClass("category");
                        cardCategory.html("<b>類別</b><br>" + data.games[i]["category_id"]);
                        //出現在畫面上
                        cardBody.append(
                            textCenter,
                            cardPrice,
                            cardCategory
                        );
                        linkImg.append(
                            cardImg
                        );

                        cardDiv.append(
                            linkImg,
                            cardBody
                        );

                        cardCol.append(
                            cardDiv
                        );
                        $("#card-container").append(cardCol);
                    }
                }
            },
            error: function () {
                alert("request error !");
            },
        });
    });
});

// 刷新頁面，偵錯用
// setInterval(() => {
//     $("#card-container").empty();
//     getImage();
// }, 5000);

function getImage() {
    $.ajax({
        url: dataURL,
        method: 'GET',
        dataType: 'json',
        data: '',
        async: true,
        success: function (data) {

            var dataLength = data.games.length;

            for (var i = 0; i < dataLength; i++) {
                //col
                var cardCol = $("<div>");
                cardCol.addClass("col");

                //card
                var cardDiv = $("<div>");
                cardDiv.addClass("card");

                //card body
                var cardBody = $("<div>");
                cardBody.addClass("card-body");

                //text-center
                var textCenter = $("<h5>");
                textCenter.addClass("text-center");
                textCenter.html(data.games[i]['name']);

                //image
                var linkImg = $("<a>");
                linkImg.attr("href", data.games[i]['link']);
                var cardImg = $("<img>");
                cardImg.attr("src", data.games[i]['img']);
                cardImg.addClass("card-img-top");

                //price
                var cardPrice = $("<p>");
                cardPrice.html("<b>說明:</b><br>" + data.games[i]["price"]);

                //category
                var cardCategory = $("<p>");
                cardCategory.addClass("category");
                cardCategory.html("<b>類別:</b><br>" + data.games[i]["category_id"]);

                //出現在畫面上
                cardBody.append(
                    textCenter,
                    cardPrice,
                    cardCategory
                );
                linkImg.append(
                    cardImg
                );

                cardDiv.append(
                    linkImg,
                    cardBody
                );

                cardCol.append(
                    cardDiv
                );

                $("#card-container").append(cardCol);

            }
        },
        error: function () {
            alert("request error !");
        },
    });
}


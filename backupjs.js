$(document).ready(function () {
    $(".user").click(function () {

        var href = $(this).attr('href');
        var toid = href.replace(/#|_/g, ''); // result: "this is a test"

       
setInterval(function(){ getMsg(); }, 200);
        function getMsg() {

            //ajax start
            $.ajax({
                url: "chat.php",
                method: "POST",
                data: {toid: toid},
                success: function (html) {

                    $("#view").html('');
                    $("#view").append(html);

                }

            });

            //ajax end
        }
        $(".send").click(function () {
            var message = $(".message").val();
            var fromid = $("#loginid").val();

            //ajax start
            $.ajax({
                url: "save.php",
                method: "post",
                data: {message: message, toid: toid},
                success: function (html) {
                    //ajax start
                    $.ajax({
                        url: "chat.php",
                        data: {toid: toid},
                        method: "post",
                        success: function (html) {
                            $("#view").html('');
                            $("#view").append(html);

                        }

                    });

                    //ajax end

                }
            });

            //ajax end


        });

        //


    });
    //
}); 
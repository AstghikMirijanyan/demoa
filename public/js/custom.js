$("#addFriend").on('click',(function(evt){
    alert("ok");
    evt.preventDefault();
    $.ajax({
        url: "/appointment",
        type: "POST",
        data:  {name: $("#name").val(), email: $("#email").val(), mobile: $("#mobile").val(), date: $("#date").val(), time: $("#time").val() },
        processData: false,
        contentType: false,
        success: function(data){
            console.log(data)
        },
        error: function(msg){
            console.log(msg)
        }
    });
}));

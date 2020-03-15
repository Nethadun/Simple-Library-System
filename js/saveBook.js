$("#save").click(function () {
    var bookAdd= $("#bookForm").serialize();
    $.ajax({
        url:"SaveBook.php",
        method:"POST",
        async:true,
        data:bookAdd
    }).done(function (res) {
        window.location="http://localhost/libSysPHP/Book.php";
        alert(res)
    })
});
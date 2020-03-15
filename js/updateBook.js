$("#update").click(function () {
    var memberUpdate= $("#bookForm").serialize();
    $.ajax({
        url:"updateBook.php",
        method:"POST",
        async:true,
        data:memberUpdate
    }).done(function (res) {
        window.location="http://localhost/libSysPHP/Book.php";
        alert(res)
    })
});
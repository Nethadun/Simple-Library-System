$("#delete").click(function () {
    var bookDelete=$("#bookForm").serialize();
    $.ajax({
        url:"DeleteBook.php",
        method:"POST",
        async:true,
        data:bookDelete
    }).done(function (rep) {
        window.location="http://localhost/libSysPHP/Book.php";
        alert(rep);
    })
});
$("#save").click(function () {
    var add= $("#issueForm").serialize();
    $.ajax({
        url:"SaveIssueBook.php",
        method:"POST",
        async:true,
        data:add
    }).done(function (res) {
        window.location="http://localhost/libSysPHP/IssueBook.php";
        alert(res)
    })
});
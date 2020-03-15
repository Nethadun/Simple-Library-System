$("#update").click(function () {
    var update= $("#issueForm").serialize();
    $.ajax({
        url:"ReturnIssueBook.php",
        method:"POST",
        async:true,
        data:update
    }).done(function (res) {
        window.location="http://localhost/libSysPHP/IssueBook.php";
        alert(res)
    })
});
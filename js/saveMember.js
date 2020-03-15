$("#save").click(function () {
    var memberAdd= $("#memberForm").serialize();
    $.ajax({
        url:"SaveMember.php",
        method:"POST",
        async:true,
        data:memberAdd
    }).done(function (res) {
        window.location="http://localhost/libSysPHP/Member.php";
        alert(res)
    })
});
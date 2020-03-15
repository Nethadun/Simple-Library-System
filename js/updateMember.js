$("#update").click(function () {
    var memberUpdate= $("#memberForm").serialize();
    $.ajax({
        url:"UpdateMember.php",
        method:"POST",
        async:true,
        data:memberUpdate
    }).done(function (res) {
        window.location="http://localhost/libSysPHP/Member.php";
        alert(res)
    })
});
$("#delete").click(function () {
    var memberDelete=$("#memberForm").serialize();
    $.ajax({
        url:"DeleteMember.php",
        method:"POST",
        async:true,
        data:memberDelete
    }).done(function (rep) {
        window.location="http://localhost/libSysPHP/Member.php";
        alert(rep);
    })
});
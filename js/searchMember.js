document.getElementById("memberSearch").addEventListener("keyup",
    function () {

        let text = document.getElementById("memberSearch").value;

        let ajax = new XMLHttpRequest();
        let method = "POST";
        let url = "SearchMember.php";
        let asynchronous = true;

        ajax.open(method, url, asynchronous);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        ajax.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {

                console.log(this.responseText);
                let data = JSON.parse(this.responseText);

                let html = "";

                for (let a = 0; a < data.length; a++) {

                    let memberId = data[a].memberId;
                    let memberName = data[a].memberName;
                    let telephone = data[a].telephone;
                    let nic = data[a].nic;
                    let email = data[a].email;
                    let address = data[a].address;

                    html += "<tr onclick='getData(this)'>";
                    html += "<td>" + memberId + "</td>";
                    html += "<td>" + memberName + "</td>";
                    html += "<td>" + telephone + "</td>";
                    html += "<td>" + nic + "</td>";
                    html += "<td>" + email + "</td>";
                    html += "<td>" + address + "</td>";
                    html += "</tr>";
                }

                document.getElementById("tbody").innerHTML = html;
            }
        };

        let data = "text=" + text;
        ajax.send(data);
    });
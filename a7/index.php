<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","profile.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<form>
<center><b><label>Please Enter Name for Search Profile</b></label> <input type="text" name="username" oninput="showUser(this.value)"></center>
</form>
<br>
<div id="txtHint"><b>Your Profile Display Here...</b></div>
</body>
</html>

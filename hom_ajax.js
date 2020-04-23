function hom_ajax() {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "hom_read.php", true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            // var a = xmlhttp.responseText;
            // document.write(a);
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function del(id) {
    // alert('nihao');
    // console.log('什么情况');
    // window.name = a;
    // document.write('123');
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }

    xmlhttp.open("GET", "select.php?id=" + id, true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            // var a = xmlhttp.responseText;
            // document.write(a);
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function wri_ajax() {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "hom_write.php", true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            // var a = xmlhttp.responseText;
            // document.write(a);
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function my() {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "my.php", true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function exp() {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "hom_delete.php", true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function shanchu(id) {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "del_read.php?id=" + id, true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function revamp() {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "hom_revamp.php", true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function amend(id) {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "amend.php?id=" + id, true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function sea() {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "sea.php", true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}

function seac() {
    var id = document.getElementById("title5").value;
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } else if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        alert('创建对象出错！');
    }
    xmlhttp.open("GET", "sea_bac.php?id=" + id, true);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.status == 200) {
            document.getElementById('test').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}
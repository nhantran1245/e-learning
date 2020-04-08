function switch_signIn(){
    document.getElementById("login").style.display="block";
    document.getElementById("signUp").style.display="none";
    createCookie('signIn');
}
function switch_signUp(){
    document.getElementById("login").style.display="none";
    document.getElementById("signUp").style.display="block";
    createCookie('signUp');
}
function createCookie(value){
    document.cookie = 'logStatus=' + value + "; path=/";
}
function getCookie(name){
    var cname = name + "=";
    var dc = document.cookie;
    if (dc.length > 0) {
        begin = dc.indexOf(cname);
        if (begin != -1) {
            begin += cname.length;
            end = dc.indexOf(";", begin);
        if (end == -1) end = dc.length;
        return unescape(dc.substring(begin, end));
        }
    }
    return null;
}

function checkLog(){
    var ck = getCookie('logStatus');
    if (ck=="signUp") {
       switch_signUp();
    }
    else switch_signIn();
    
}
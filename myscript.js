function funksioni(){
    var emriUser = document.getElementById('emri').value;
    var password = document.getElementById('password').value;


    if (emriUser==""){
        alert("duhet te shenosh emer");
    }else if(password==""){
        alert("duhet te shenosh password");
    }else{
        alert("te dhenat jane ne rregull"); 
    }
}

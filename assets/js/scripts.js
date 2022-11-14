function validate_pass(e){
    
    let password =document.getElementById("new_pass");
    let re_password = document.getElementById("conf_new_pass");
    let pass =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if(password.value==re_password.value && password.value.match(pass) ){
        document.getElementById("match_yes").style.display="block";
        document.getElementById("match_none").style.display="none";
        re_password.style.border="solid green 1px";
        password.style.border="solid green 1px";
    }
    else{
        document.getElementById("match_yes").style.display="none";
        document.getElementById("match_none").style.display="block";
        re_password.style.border="solid red 1px";
        password.style.border="solid red 1px";
    }
}
function error_pass(){
    let current_pass =document.getElementById("current_pass1");
    let real_pass =document.getElementById("hdn_session_pass");
    let password =document.getElementById('new_pass');
    let re_password = document.getElementById('conf_new_pass');
    if(password.value==""){
        password.style.border="solid red 1px";
        password.focus();

    }
    if(re_password.value==""){
        re_password.style.border="solid red 1px";
        re_password.focus();
    }
    else if(password.value==re_password.value && real_pass.value==current_pass.value){
        document.getElementById("edit_pass").click();
        document.getElementById("match_c_none").style.display="none";
    }
    else{ 
        document.getElementById("match_c_none").style.display="block";
        current_pass.focus();
        current_pass.style.border="solid red 1px";
    }


}

function deletea(){
    let current_pass =document.getElementById("current_pass2");
    let real_pass =document.getElementById("hdn_session_pass2");
    if(real_pass.value==current_pass.value){
        document.getElementById("delete_acc").click();
        document.getElementById("match_cc_none").style.display="none";
    }
    else{ 
        document.getElementById("match_cc_none").style.display="block";
        current_pass.focus();
        current_pass.style.border="solid red 1px";
    }


}


function loadFile(e){
    var image = document.getElementById('profile_image');
	image.src = URL.createObjectURL(e.target.files[0]);
}
function loadFile_b(e){
    var image = document.getElementById('b_photo');
	image.src = URL.createObjectURL(e.target.files[0]);
}
function apear_sign_in(){
    document.getElementById("rem_pass").style.display           ="none";
    document.getElementById("have_acc").style.display          ="none";
    document.getElementById("sign-in").style.display           ="none";
    document.getElementById("sign-up").style.display           ="block";
    document.getElementById("reset_pass").style.display        ="block";
    document.getElementById("full-name").style.display         ="none";
    document.getElementById("pass").style.display="block";
    document.getElementById("submit").innerText                ="Log in";
    document.getElementById("submit").name                     ="sign-in";
    document.getElementById("first_name").removeAttribute("required");
    document.getElementById("last_name").removeAttribute("required");
    document.getElementById("password").setAttribute("required","");

}function apear_sign_up(){
    document.getElementById("have_acc").style.display          ="block";
    document.getElementById("reset_pass").style.display        ="none";
    document.getElementById("rem_pass").style.display           ="none";
    document.getElementById("sign-in").style.display           ="block";
    document.getElementById("sign-up").style.display           ="none";
    document.getElementById("full-name").style.display         ="";
    document.getElementById("pass").style.display="none";
    document.getElementById("submit").innerText                ="sign up";
    document.getElementById("submit").name                     ="sign-up";
    document.getElementById("first_name").setAttribute("required","");
    document.getElementById("last_name").setAttribute("required","");
    document.getElementById("password").removeAttribute("required");
}
function reset(){
    document.getElementById("submit").innerText                ="Reset";
    document.getElementById("submit").name                     ="reset";
    document.getElementById("pass").style.display="none";
    document.getElementById("rem_pass").style.display           ="block";
    document.getElementById("reset_pass").style.display        ="none";
    document.getElementById("password").removeAttribute("required");
}
function show_desc(desc){
   document.getElementById("desc_showed").innerText=desc;
}
function edit_b(id,name,desc,link,quantity,price){
    document.getElementById("edit_name").value     = name;
    document.getElementById("edit_link").value     = link;
    document.getElementById("edit_quantity").value = quantity;
    document.getElementById("edit_price").value    = price;
    document.getElementById("edit_desc").value     = desc;
}
function show_photo(photo,id){
    document.getElementById('b_photo').setAttribute('src','assets/img/product/'+photo);
    document.getElementById("auto_url_photo").value = photo;
    document.getElementById("b_id_pho").value       = id;

}


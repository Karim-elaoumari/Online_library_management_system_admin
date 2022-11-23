// ---------------------- sign up in changing apear -------------------
rem_pass = document.getElementById("rem_pass")
have_acc = document.getElementById("have_acc")
sign_in  = document.getElementById("sign-in")
sign_up  = document.getElementById("sign-up")
reset_pass = document.getElementById("reset_pass")
full_name  = document.getElementById("full-name")
pass       = document.getElementById("pass")
submit     = document.getElementById("submit")
first_name = document.getElementById("first_name")
last_name  = document.getElementById("last_name")
password   = document.getElementById("password")

function apear_sign_in(){
    rem_pass.style.display           ="none";
    have_acc.style.display          ="none";
    sign_in.style.display           ="none";
    sign_up.style.display           ="block";
    reset_pass.style.display        ="block";
    full_name.style.display         ="none";
    pass.style.display="block";
    submit.innerText                ="Log in";
    submit.name                     ="sign-in";
    first_name.removeAttribute("required");
    last_name.removeAttribute("required");
    password.setAttribute("required","");

}function apear_sign_up(){
    have_acc.style.display          ="block";
    reset_pass.style.display        ="none";
    rem_pass.style.display          ="none";
    sign_in.style.display           ="block";
    sign_up.style.display           ="none";
    full_name.style.display         ="";
    pass.style.display="none";
    submit.innerText                ="sign up";
    submit.name                     ="sign-up";
    first_name.setAttribute("required","");
    last_name.setAttribute("required","");
    password.removeAttribute("required");
}
function reset(){
    submit.innerText                ="Reset";
    submit.name                     ="reset";
    pass.style.display="none";
    rem_pass.style.display          ="block";
    reset_pass.style.display        ="none";
    password.removeAttribute("required");
}


// ------------------------------------- admin form validation ------------------------------
let curent_validate=false;
let paswords_validate =false;
let edit_btn =document.getElementById("edit_pass");
let real_pass =document.getElementById("hdn_session_pass2");
let current_pass2 =document.getElementById("current_pass1");
//  validate  -----------------------------password change areas----------------------------------
function validate_pass(){
    
    let password =document.getElementById("new_pass");
    let re_password = document.getElementById("conf_new_pass");
    let pass =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if(password.value==re_password.value && password.value.match(pass)){
        document.getElementById("match_yes").style.display="block";
        document.getElementById("match_none").style.display="none";
        re_password.style.border="solid green 1px";
        password.style.border="solid green 1px";
        paswords_validate =true;
        show_edit_pass_btn();
    }
    else{
        document.getElementById("match_yes").style.display="none";
        document.getElementById("match_none").style.display="block";
        re_password.style.border="solid red 1px";
        password.style.border="solid red 1px";
        paswords_validate =false;
        show_edit_pass_btn();
    }
}
function validate_curent(){
    if(real_pass.value==current_pass2.value){
       
        curent_validate=true;
        document.getElementById("match_c_none").style.display="none";
        current_pass2.style.border="solid green 1px";
        show_edit_pass_btn();

    }
    else{
        curent_validate=false;
        document.getElementById("match_c_none").style.display="block";
        current_pass2.style.border="solid red 1px";
        show_edit_pass_btn();
       
    }

}

function show_edit_pass_btn(){
    if(curent_validate && paswords_validate){
        edit_btn.disabled =false;
        
    }
    else{
        edit_btn.disabled =true;
    }
}
// validate --------------------------edit profile areas--------------------------------------
let match_first_none = document.getElementById("match_first_none");
let match_last_none  =  document.getElementById("match_last_none");
let match_email_none =  document.getElementById("match_email_none");
let match_c1_none    =   document.getElementById("match_c3_none");
let edit_first       =  document.getElementById("edit_first");
let edit_last        =  document.getElementById("edit_last");
let email_edit       =  document.getElementById("email_edit");
let current_pass3    =   document.getElementById("current_pass3");
let hdn_session_pass3=    document.getElementById("hdn_session_pass3");
let profile_edit_btn =    document.getElementById("profile_edit_btn");
let first_val        =   true
let last_val         =   true
let email_val        = true
let curent_pass3_val = false
let string_regex =/^[a-zA-Z]{3,10}$/;
let email_regex  = /^[a-zA-Z]+@[a-zA-Z]+.[a-z]{2,5}$/;


function  validate_first(){
    if(edit_first.value.match(string_regex)){
        first_val=true
        edit_first.style.border="solid green 1px";
        match_first_none.style.display="none"
        show_edit_pro_btn()
    }else{
        first_val=false
        edit_first.style.border="solid red 1px";
        match_first_none.style.display="block"
        show_edit_pro_btn()
    }
}
function validate_last(){
    if(edit_last.value.match(string_regex)){
        last_val=true
        edit_last.style.border="solid green 1px";
        match_last_none.style.display="none"
        show_edit_pro_btn()
    }else{
        last_val=false
        edit_last.style.border="solid red 1px";
        match_last_none.style.display="block"
        show_edit_pro_btn()
    }
}
function validate_email(){
    if(email_edit.value.match(email_regex)){
        email_val=true
        email_edit.style.border="solid green 1px";
        match_email_none.style.display="none"
        show_edit_pro_btn()
    }else{
        email_val=false
        email_edit.style.border="solid red 1px";
        match_email_none.style.display="block"
        show_edit_pro_btn()
    }

}
function validate_pass3(){
    if(current_pass3.value ==hdn_session_pass3.value){
        curent_pass3_val=true
        current_pass3.style.border="solid green 1px";
        match_c1_none.style.display="none"
        show_edit_pro_btn()
    }else{
        curent_pass3_val=false
        current_pass3.style.border="solid red 1px";
        match_c1_none.style.display="block"
        show_edit_pro_btn()
    }

}


function show_edit_pro_btn(){
    if(first_val && last_val && email_val && curent_pass3_val ){
        profile_edit_btn.disabled = false
    }
    else{
        profile_edit_btn.disabled = true
    }
}
//---------------------------------- validate delete areas ------------------------------------
function deletea(){
    let current_pass =document.getElementById("current_pass2");
    if(real_pass.value==current_pass.value){
        document.getElementById("delete_acc").disabled = false;
        document.getElementById("match_cc_none").style.display="none";
        current_pass.style.border="solid green 1px";
    }
    else{ 
        document.getElementById("match_cc_none").style.display="block";
        current_pass.focus();
        document.getElementById("delete_acc").disabled  = true;
        current_pass.style.border="solid red 1px";
    }
}
// ----------------------------------- admin form validation end ------------------------------
function loadFile(e){
    var image = document.getElementById('profile_image');
	image.src = URL.createObjectURL(e.target.files[0]);
}
function loadFile_b(e){
    var image = document.getElementById('b_photo');
	image.src = URL.createObjectURL(e.target.files[0]);
}
function show_desc(desc){
   document.getElementById("desc_showed").innerText=desc;
}


// --------------------------- book edit -----------------------------------------
function edit_b(id,name,desc,link,quantity,price,photo){
    document.getElementById("edit_name").value     = name;
    document.getElementById("edit_link").value     = link;
    document.getElementById("edit_quantity").value = quantity;
    document.getElementById("edit_price").value    = price;
    document.getElementById("edit_desc").value     = desc;
    document.getElementById("b_id").value          = id;
    document.getElementById('b_photo').setAttribute('src','assets/img/product/'+photo);
    document.getElementById("auto_url_photo").value = photo;
}
function delete_b(id){
    document.getElementById("b_id_delete").value   = id;
}


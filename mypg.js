function validation(){
 
    var name = document.getElementById("name").value;
    var subject = document.getElementById("subject").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    var sucess = document.getElementById("sucess");
    var text;

    error_message.style.padding = "10px";
    

    if(name.length < 5){

        text = "Please Enter Valid Name";
        error_message.innerHTML = text;
        sucess.hidden = text;
        return false;
    }else if(subject.length < 10){

        text = "Please Enter Valid Subject";
        error_message.innerHTML = text;
        sucess.hidden = text;
        return false;
    }else if(isNaN(phone) || phone.length != 10){

        text = "Please Enter Valid Phone Number";
        error_message.innerHTML = text;
        sucess.hidden = text;
        return false;
    } else if(email.indexOf("@") == -1 || email.length < 6){

        text = "Please Enter Valid Email";
        error_message.innerHTML = text;
        sucess.hidden = text;
        return false;
    }else if(message.length <= 1){
        text = "Please Enter More Than 140 Character";
        error_message.innerHTML = text;
        sucess.hidden = text;
        return false;
    }
    else{
        text = "Rigth";
        sucess.innerHTML = text;
        error_message.hidden = text;
        return true;
    }
       

}
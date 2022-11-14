function form() {
    var name = document.myform.username.value;
    var password = document.myform.password.value;
    var dog = document.myform.dog.value;
    var cat = document.myform.cat.value;
    var hamster = document.myform.hamster.value;
    if (name==null || name=="") {
        alert("Name can't be blank");
        return false;
    }
    else if (password == null || password == "") {
        alert("Password cannot be left blank");
        return false;
    }
    else if (dog == null || dog == "" || dog < 0){
        alert("Please check that you have entered the amount of dogs correctly")
        return false
    }
    else if (cat == null || cat == "" || cat < 0){
        alert("Please check that you have entered the amount of cats correctly")
        return false
    }
    else if (hamster == null || hamster == "" || hamster < 0){
        alert("Please check that you have entered the amount of hamsters correctly")
        return false
    }
    else if (ship == null){
        alert("Please choose a shipping option")
        return false
    }
    else if(document.getElementById('ship-1').checked) {
        console.log("dog")
    }
    else if(document.getElementById('ship-2').checked) {
        console.log("cat")
    }
    else if(document.getElementById('ship-3').checked) {
        console.log('hamster')
    }
    else {
        document.getElementById("disp").innerHTML
            = "No one selected";
    }
} 
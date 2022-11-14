function validate(){
    var p1 = document.getElementById('name')
    var p2 = document.getElementById('vname')
    var pass1 = p1.value
    var pass2 = p2.value

    if(pass1 == pass2){
        alert("Valid")
        console.log("valid")
        console.log(p1.value)
        console.log(p2.value)
    }
    else {
        alert("Not Valid")
        console.log("invalid")
        console.log(p1.value)
        console.log(p2.value)

    }
}
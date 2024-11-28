function validate()
{
    
    var pnum = document.getElementById("number").value;
    

    var regex = /^[7-9][0-9]{9}$/;

    if(regex.test(pnum)){
        return true;
    }
    else{
        alert("Enter Valid Mobile Number\nIt starts from 7-9\nAnd Contain 10 digits only");
        return false;
    }
}
    

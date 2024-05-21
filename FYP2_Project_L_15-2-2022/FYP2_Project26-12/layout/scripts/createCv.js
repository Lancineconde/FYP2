function addNewWEField(){

    let newNode=document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("weField");
    newNode.classList.add("mt-2");
    newNode.setAttribute("placeHolder", "Enter here");

    let weOb = document.getElementById("we");
    let weAddButtonOb = document.getElementById("weAddButton");

    weOb.insertBefore(newNode, weAddButtonOb);
}

function addNewAQField(){

    let newNode=document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("aqField");
    newNode.classList.add("mt-2");
    newNode.setAttribute("placeHolder", "Enter here");

    let aqOb = document.getElementById("aq");
    let aqAddButtonOb = document.getElementById("aqAddButton");

    aqOb.insertBefore(newNode, aqAddButtonOb);
}

//generate CV

function generateCV(){
    //console.log("generate cv");

    let nameField = document.getElementById("nameField").value;
    let nameT1 = document.getElementById("nameT1");

    nameT1.innerHTML = nameField;

    document.getElementById('nameT2').innerHTML = nameField;

    //contact
    document.getElementById("contactT").innerHTML = document.getElementById("contact").value;

    //address
    document.getElementById("addressT").innerHTML = document.getElementById("address").value;

    document.getElementById("wbT").innerHTML = document.getElementById("wbField").value;
    document.getElementById("ldT").innerHTML = document.getElementById("ldField").value;

    //objectives
    document.getElementById("objectiveT").innerHTML = document.getElementById("objectiveField").value;

    //Work ex
    let wes = document.getElementsByClassName("weField");
    let str = " ";

    for (let e of wes) {
        str = str + `<li> ${e.value} </li>`;
    }

    document.getElementById("weT").innerHTML = str;

    //Aq

    let aqs = document.getElementsByClassName("aqField");
    let str1 = " ";

    for (let e of aqs) {
        str1 = str1 + `<li> ${e.value} </li>`;
    }

    document.getElementById("aqT").innerHTML = str1;


    // code for set img

    let file = document.getElementById('imgField').files[0];

    console.log(file);

    let reader = new FileReader();

    reader.readAsDataURL(file);
    console.log(reader.result);

    //set in template
    reader.onloadend = function() {
        document.getElementById('imgT').src = reader.result;
    };





    document.getElementById('cv-form').style.display = "none";
    document.getElementById('cv-template').style.display = "block";

}

//print Cv

function printCV(){

    window.print();
}

function genPDF() {

	var doc = new jsPDF();

    var specialElementHandlers = {
        '#hidediv' : function(element,render) {return true;}
    };

    doc.fromHTML($('#cv-template').get(0), 20,20,{
                 'width':500,
        		'elementHandlers': specialElementHandlers
    });

	doc.save('Test.pdf');

}

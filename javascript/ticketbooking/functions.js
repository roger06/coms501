 function reload() {

     location.reload();
 }


// when user clicks 'next...'
//  shows a number input boxes as chosen 
 function showInputs() {
			
    const maxTickets = 5;

    // number of tickets selected
    var inputNumber = document.getElementById("numberoftickets").value;

    console.log(inputNumber);

    // HTML bullet list
    var nameInputList = document.getElementById("inputList");
    
    // error
    var errorMessage = document.getElementById("errorMessage");
    
    // nameInputList.innerHTML = "";
    // nameInputList.appendChild(document.createTextNode(''));


    
    // numbner chosen exceeds limit - display error
    if (inputNumber > maxTickets) {
        errorMessage.style.display = "block";
        // end function
        return;
    } 
    
    else {

        errorMessage.style.display = "none";
    }
    
    // loop the number chosen and create an input box in a list.
    for (let i = 0; i < inputNumber; i++) {
        
        var ticketInput = document.createElement("li");
    
        var inputField = document.createElement("input");
        
        inputField.classList.add("ticketName");
        
        ticketInput.appendChild(inputField);
        inputList.appendChild(ticketInput);
    }




    
    
    if (inputNumber > 0 && inputNumber !== null) {
        // show title for list - "Enter name(s)"
        var listTitle = document.getElementById("inputListTitle");
        listTitle.style.display = "block";
        
        //  show purchase button
        var purchaseButton = document.getElementById("purchaseButton");
        purchaseButton.style.display = "block";
    }
    

    if (inputNumber <= 0 || inputNumber === null) {
        alert("Woops! You haven't entered a valid amount.")
    }

} // showInputs()

	
		
function purchase() {

    // ticketName is the class we give to the input field
    // obviously has to be a class (not ID) as there will be several
    var names = document.getElementsByClassName("ticketName");
    
    // OL list
    var nameOutputList = document.getElementById("outputList");
    // Purchase button
    var orderProcessed = document.getElementById("purchaseButton");
    
 
    nameOutputList.innerHTML = "";
    
    for (var i = 0; i < names.length; i++) {
        var nameOutput = document.createElement("li");
        var nameOutputText = document.createTextNode(names[i].value);
        
        nameOutput.appendChild(nameOutputText);
        nameOutputList.appendChild(nameOutput);
    }
    
    // show 'ticket holder' heading
    var ticketHolder = document.getElementById("ticketHolder");
    ticketHolder.style.display = "block";
    
    
    // show 'total price' heading
    var totalPrice = document.getElementById("totalPrice");
    totalPrice.style.display = "block";
    
    
    // show 'order processed' heading
    var processedHeading = document.getElementById("processedHeading");
    processedHeading.style.display = "block";
    

    var price = 15 * names.length;
    var totalPriceOutput = document.createTextNode(price);
    
    totalPrice.appendChild(totalPriceOutput);
    
    // hide elements we don't need 
    document.getElementById("purchaseButton").disabled = true;
    document.getElementById("inputListTitle").style.display = "none";
    document.getElementById("inputList").style.display = "none";
}
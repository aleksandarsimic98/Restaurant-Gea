function validacija(){
    // Validation of the form , checkin that everything is right
      imeee=document.getElementById("imee").value;
      prezimeee=document.getElementById("prezimee").value;
      emailll=document.getElementById("emaill").value;
      kor_imeee=document.getElementById("kor_imee").value;
      lozinkaaa=document.getElementById("lozinkaa").value;
      godineee=document.getElementById("godinee").value;
      
    if(imeee==='' || imeee===null && prezimeee==='' || prezimeee===null && emailll==='' || emailll===null &&kor_imeee==='' || kor_imeee===null && lozinkaaa==='' || lozinkaaa===null && godineee==='' || godineee===null){
      alert("Morate uneti sva polja!");
      document.getElementById("uzbuna").style.display="block"; 
      document.getElementById("uspeh").style.display="none";
    }
    else{
      alert("Uspešna prijava");
      document.getElementById("uspeh").style.display="block";
      document.getElementById("uzbuna").style.display="none"; 
    }
  
  // other part PHP is checking
   
    var formData = new FormData(document.getElementById('myForm'));
      $.ajax({
          type: 'POST',
          url: 'sign-up.php',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
              // Handle the server response here
              console.log(response);
          }
      });
  
  }
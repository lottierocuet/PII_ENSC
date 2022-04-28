<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">
    <img src="images/modifier.png"alt="Lien vers site externe"/>
</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>
                        <form method="POST" action="PopUpModifPages.php" class ="cadre"> 
                    <label for="Titre">Intitulé de l'expérience :</label> 
                    <input type="text" name="Titre" required/> <br/>
                    <br/>

                    Type  :<br/> 
                    
                      <input type="radio" name="Type" id="experience"  value="0"required/> 
                      <label for= "experiences">Expérience</label> 
                      <input type ="radio" name="Type" id="formations" value ="1" required/> 
                      <label for= "formations" >Formation</label> <br/>
                    <br/>
                      

                    <label for="DateDebut">Date de début :</label>
                    <input placeholder = "JJ/MM/AA" type="date" name="DateDebut" required/> <br/>
                    <br/>

                    <label for="DateFin">Date de fin :</label>
                    <input placeholder = "JJ/MM/AA" type="date" name="DateFin"/> <br/>
                    <br/> 
                                      
                    <label for="Localisation">Localisation</label> 
                    <input type="text" name="Localisation"/> <br/>
                    <br/>

                    <label for="Description">Description :</label> 
                    <textarea  name="Description"></textarea> <br/>
                    <br/>
                                        
                                                  
                    <label for="Lien">Lien</label> 
                    <textarea  name="Lien"></textarea> <br/>
                    <br/>

                    <label for="LienImg">Lien Image</label> 
                    <textarea  name="LienImg"></textarea> <br/>
                    <br/>
                              
                    <input class = "Ajout" type="submit"> 
                    Modifier <?php echo $_GET['Id_Pages']?>
                    </input>

                </form>
    </p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

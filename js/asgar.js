// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('ad-myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("ad-caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("ad-close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

// another one more 
// Get the modal
var modal = document.getElementById('other_img');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('ad1-myImg1');
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("ad1-caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("ad1-close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

// here form code
 function finalCost(){
            var roomType = document.getElementById("room_type").value;
            var roomNum = document.getElementById("room_number").value;
            var personNum = document.getElementById("person_number").value;
            var childNum = document.getElementById("child_number").value;
            var resFacilities = document.getElementById("res_facilities").value;

            var total = (parseInt(roomType)*10) + ((roomNum)*2) + ((personNum)*3) + ((childNum)*2) + ((resFacilities)*5)

            document.getElementById("result").innerHTML = total;
        }
 // here end 
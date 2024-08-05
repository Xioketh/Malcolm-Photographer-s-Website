<?php include 'adminHeader.php';?>


<body>
<div class="m-5">
    <h2 style="font-family: 'Indie Flower', cursive;">Pricing</h2>
</div>
<div class="data m-5">

<div class="border border-3 p-5">

<h5>Add Package</h5>
<div class="row">
    <div class="col-4 p-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
       <input type="text" placeholder="Package Titile" class="form-control mb-1" name="Titile" id="Titile">
       <input type="text" placeholder="Package Description" class="form-control mb-1" name="Description" id="Description">
       <input type="text" placeholder="Package Price" class="form-control mb-1" name="Price" id="Price">
       <button class="btn btn-success" onclick="addPricing()">Save</button>
    </div>
    <div class="col-8">        
       
    </div>
</div>
</div>
</div>

<script>
    function addPricing(){
    var Titile = document.getElementById("Titile").value;
    var Description = document.getElementById("Description").value;
    var Price = document.getElementById("Price").value;
    
    console.log(Titile)



    if (Titile == "" || Description == "" || Price == "") {
        Swal.fire({
            icon: 'warning',
            title: '',
            text: 'Please Fill Empty Fields',
        });
        return;
    }

    var formData = new FormData();
    formData.append("Titile", Titile);
    formData.append("Description", Description);
    formData.append("Price", Price);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "savePricing.php", true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            Swal.fire({
                title: '',
                text: 'Package Save Success!',
                icon: 'success',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.reload()
                }
            });
        }
    };

    xhr.send(formData);
}
</script>


<?php include 'adminFooter.php';?>
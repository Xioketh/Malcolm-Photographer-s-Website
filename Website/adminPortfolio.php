<?php include 'adminHeader.php';?>


<body>
<div class="m-5">
    <h2 style="font-family: 'Indie Flower', cursive;">Portfolio</h2>
</div>
<div class="border border-3 p-5">

<h5>Add Memories</h5>
<div class="row">
    <div class="col-4 p-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <input class="form-control mb-1" type="file" id="image" accept=".jpg .png .jpeg">
    <select class="form-select" aria-label=".form-select-lg example" id="category">
                            <option value="">Select Memory</option>
                                <option value="natural">Natural</option>
                                <option value="lifestyle">Lifestyle</option>
                                <option value="wedding">Wedding</option>
                          
                        </select>
       <button class="btn btn-success" onclick="addMemo()">Save Memory</button>
    </div>
    <div class="col-8">        
       
    </div>
</div>
</div>

<script>
    function addMemo() {
    var category = document.getElementById("category").value;
    var imageInput = document.getElementById("image");

    if (imageInput.files.length > 0) {
        var imageName = imageInput.files[0].name;
    } else {
        imageName = "";
        Swal.fire({
            icon: 'warning',
            title: '',
            text: 'Please Add Image',
        });
        return;
        return;
    }

    if (category == "") {
        Swal.fire({
            icon: 'warning',
            title: '',
            text: 'Please Select Category',
        });
        return;
    }

    var formData = new FormData();
    formData.append("category", category);

    // Check if an image is selected
    if (imageInput.files.length > 0) {
        formData.append("image", imageInput.files[0]);
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "savePortfolio.php", true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            Swal.fire({
                title: '',
                text: 'Memory Added Success!',
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




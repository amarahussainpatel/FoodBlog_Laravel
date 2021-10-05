<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>Food Blog</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">
        </div>
      </div>
    
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    
          <h1 class="logo me-auto me-lg-0"><a href="/">Food Mood</a></h1>
          <a href="/recipes" class="book-a-table-btn scrollto d-none d-lg-flex">Enter A Recipe</a>
    
        </div>
      </header>
      <br><br><br>
      <main id="main">

      <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Recipe</h2>
            <p>Enter Your Speciality</p>
          </div>

        <form class="formform" action="userscon" enctype="multipart/form-data" method="POST"  data-aos="fade-up" data-aos-delay="100" >
            @csrf
            {{-- <span style='color:red'>@error('file'){{ "Image Type not valid" }} @enderror </span> <br> --}}
            <div class="row">
                <div class="col-lg-5 col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    <span style='color:red'>@error('name'){{ $message }} @enderror </span> <br>
                </div>
                <div class="col-lg-5 col-md-6 form-group mt-4 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    <span style='color:red'>@error('email'){{ $message }} @enderror </span> <br>
                </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="dishname" id="email" placeholder="Name Of Your Dish" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="ingredients" rows="9" placeholder="Ingredients"></textarea>
              </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="recipe" rows="9" placeholder="Recipe"></textarea>
            </div>
            {{-- <div class="form-group mt-3">
                <input class="form-control" type="file" name="file">
            </div> --}}
            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>  
            {{-- <div class="custom-file">
                <input type="file" name="filename[]" class="form-control" id="images" multiple>
                <label class="custom-file-label" for="images">Choose image</label>
            </div> --}}

            {{-- upload/delete file no preview --}}
            <p class="mt-5 text-center">
                <label for="attachment">
                    <a class="btn btn-outline-warning text-light" role="button" aria-disabled="false" required>+ Add Image</a> 
                </label>
                <input type="file" name="file[]" id="attachment" accept="image/png, image/jpeg, image/jpg" style="visibility: hidden; position: absolute;" multiple/>  
            </p>

            <p id="files-area">
                <span id="filesList">
                    <span id="files-names"></span>
                </span>
            </p>

            {{-- no multiple file allowed but add remove with preview --}}
            {{-- <div class="field" align="left">
            <label for="files">
                <a class="btn btn-outline-warning text-light" role="button" aria-disabled="false" required>+ Add Image</a> 
                <input type="file" id="files" name="files[]" style="visibility: hidden;" multiple />
            </label>
            </div> --}}
            <br><br>
            <div class="text-center"><button type="submit">SUBMIT</button>
        </form>

        {{-- <p class="mt-5 text-center">
            <label for="attachment">
                <a class="btn btn-primary text-light" role="button" aria-disabled="false">+ Add</a>
                
            </label>
            <input type="file" name="file[]" id="attachment" style="visibility: hidden; position: absolute;" multiple/>
            
        </p>
        <p id="files-area">
            <span id="filesList">
                <span id="files-names"></span>
            </span>
        </p> --}}
        
  
          <form action="userscon" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="row">
                {{-- <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                    <div class="validate"></div>
                </div> --}}
            </div>
            {{-- <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div> --}}
            {{-- <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div> --}}
            {{-- <div class="text-center"><button type="submit">Submit</button></div> --}}
            <img src="storage/app/img/puq6j88z3oon0gOLGdyj0OKthrL8BGvSWbwakZmK.jpg">
          </form>
  
        </div>
      </section><!-- End Book A Table Section -->
    </main><!-- End #main -->

    <div id="preloader"></div> 
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{-- upload/delete file no preview --}}
 <script>
    const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

    $("#attachment").on('change', function(e){
        for(var i = 0; i < this.files.length; i++){
            let fileBloc = $('<span/>', {class: 'file-block'}),
                fileName = $('<span/>', {class: 'name', text: this.files.item(i).name});
            fileBloc.append('<span style="color:red" class="file-delete"><span>x</span></span>')
                .append(fileName);
            $("#filesList > #files-names").append(fileBloc);
        };
        // Ajout des fichiers dans l'objet DataTransfer
        for (let file of this.files) {
            dt.items.add(file);
        }
        // Mise à jour des fichiers de l'input file après ajout
        this.files = dt.files;

        // EventListener pour le bouton de suppression créé
        $('span.file-delete').click(function(){
            let name = $(this).next('span.name').text();
            // Supprimer l'affichage du nom de fichier
            $(this).parent().remove();
            for(let i = 0; i < dt.items.length; i++){
                // Correspondance du fichier et du nom
                if(name === dt.items[i].getAsFile().name){
                    // Suppression du fichier dans l'objet DataTransfer
                    dt.items.remove(i);
                    continue;
                }
            }
            // Mise à jour des fichiers de l'input file après suppression
            document.getElementById('attachment').files = dt.files;
        });
    });
</script>
{{-- no multiple file allowed but add remove with preview --}}
{{-- <script>
    $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span style='color:red' class=\"remove\">x</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
    </script> --}}

  <!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<style>
     dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
    }

    .btn-outline-warning {
        border-color: #cda45e !important;
    }

    .btn-outline-warning:hover {
        background-color: #cda45e !important;
    }

    .imgPreview img {
        padding: 8px;
        max-width: 80px;
    } 

    #files-area{
	width: 30%;
	margin: 0 auto;
}
.file-block{
	border-radius: 10px;
	background-color: rgba(144, 163, 203, 0.2);
	margin: 5px;
	color: initial;
	display: inline-flex;
	& > span.name{
		padding-right: 10px;
		width: max-content;
		display: inline-flex;
	}
}
.file-delete{
	display: flex;
	width: 24px;
	color: initial;
	background-color: #6eb4ff00;
	font-size: large;
	justify-content: center;
	margin-right: 3px;
	cursor: pointer;
	&:hover{
		background-color: rgba(144, 163, 203, 0.2);
		border-radius: 10px;
	}
	& > span{
		transform: rotate(45deg);
	}
}

</style>

<style>
    input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  /* background: #444; */
  /* border: 1px solid black; */
  /* color: white; */
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  /* background: white; */
  /* color: black; */
}
</style>

</body>    
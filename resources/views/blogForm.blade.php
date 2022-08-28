<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>


</head>

<body>


    <div class="card" style="width: 100%;">

        <div class="card-body">
            <h5 class="card-title">Blog Form</h5>

            <form method="post" action="{{ route('createBlog') }}" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                        placeholder=" Blog Title">


                    <div class="mb-3 mt-3">
                        <label for="formFile" class="form-label">Add short description</label>

                        <input type="text" class="form-control" id="title" name="short_description"
                            aria-describedby="emailHelp" placeholder="Add short description">

                    </div>



                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Blog Image</label>
                        <input class="form-control" type="file" name="file" id="formFile">

                    </div>


                    <textarea name="editor1"></textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>


                </div>




                <button type="submit" class="btn btn-primary">Submit</button>
            </form>






        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        CKEDITOR
        CKEDITOR.replace('#editor1', {
            height: 300,

            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
            filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',
            removeButtons: 'PasteFromWord'
        });
    </script>

</body>

</html>

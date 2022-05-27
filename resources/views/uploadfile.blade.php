<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container p-5">
        <form action="imagefile" enctype="multipart/form-data" method="POST" class="bg-warning p-5">
            @csrf
            <div class="form-group">
                <label>Imagefile :</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customfile" name="imagefile">
                    <label class="custom-file-label" id="customfile">Choose image file</label>
                </div>
            </div>
            <div class="form-group">
                <label>File Name</label>
                <select name="file_name" class="form-control">
                    <option value="" selected disabled>--- Select File name ---</option>
                    <option value="random">Random Name</option>
                    <option value="original">Original Name</option>
                </select>
            </div>
            <div class="form-group">
                <input type="checkbox" name="check" id="checkbox">
                <label>if you want to add Folder Name</label>
            </div>
            <div class="form-group">
                <label>Folder Name :</label>
                <input type="text" name="folder_name" class="form-control" id="foldername" disabled>
            </div>

            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</body>
<script>
    const folderName = document.getElementById('foldername');
    const checkbox = document.getElementById('checkbox');
    checkbox.addEventListener('click', () => {
        folderName.disabled = false;
    })
</script>

</html>
<script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
<script>
    window.onload = getExif;
    function getExif() {
        let img = document.getElementById("img")
        EXIF.getData(img, function () {
            let info = EXIF.getAllTags(this)
            let json = JSON.parse(JSON.stringify(info))
            for (let i in json) {
                // document.getElementById("info").innerHTML = document.getElementById("info").innerHTML + " " + i + ":" + json[i] + "<br/>";
                let content = document.getElementById("info").innerHTML
                document.getElementById("info").innerHTML = content + "<tr><td>" + i + "</td><td>" + json[i] + "</td></tr>"
            }
        })
    }
</script>
<style>
    img {
        max-width: 80vw;
        max-height: 70vh;

    }
</style>
<?php
if (file_exists("image.jpg")) {
    print "<img src='image.jpg' alt='image' id='img' onload='getExif()'>";
    print "
<table id='info'>
    <tr>
        <th>Tag</th>
        <th>Info</th>
    </tr>
</table>
";
    print "
<form>
    <button formaction='deleteImage.php'>Delete Image</button>
</form>
    ";
}
else print "
<form action='uploadImg.php' method='post' enctype='multipart/form-data'>
    <input type='file' name='image' accept='image/jpeg'>
    <button type='submit'>Submit image</button>
</form>
You have not selected an image yet!
";
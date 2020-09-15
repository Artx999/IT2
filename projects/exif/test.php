<script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
<script>
    window.onload=getExif;

    function getExif() {
        var img1 = document.getElementById("img1");
        EXIF.getData(img1, function () {
            var make = EXIF.getTag(this, "Make");
            var model = EXIF.getTag(this, "Model");
            var makeAndModel = document.getElementById("makeAndModel");
            makeAndModel.innerHTML = `${make} ${model}`;
        });
    }
</script>
<style>
    img {
        width: 80vw;
    }
</style>
<img src="image.jpg" id="img1" />
<pre>Make and model: <span id="makeAndModel"></span></pre>
<br/>
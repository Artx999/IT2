<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/findShapeIndex.js "></script>
<style>
    body {
        overflow: hidden;
    }
    img {
        position: absolute;
    }
    #svg2 {
        left: -1000px;
    }
    .star2 {
        visibility: hidden;
    }
</style>


<img src="svg1.svg" alt="svg 1" id="svg1">
<img src="svg2.svg" alt="svg 2" id="svg2">
<svg id="star" height="200" xmlns="http://www.w3.org/2000/svg">
    <polygon class="star1" points="100,10 40,180 190,60 10,60 160,180" fill="yellow"/>
</svg>
<svg id="lol" width="300" height="200">
    <polygon class="star2" points="100,10 40,198 190,78 10,78 160,198"
             style="fill: #b30086;stroke:#000000;stroke-width:5;fill-rule:evenodd;" />
</svg>


<script>
    let tline = gsap.timeline()
    tline.to(".star1", {
        morphSVG: ".star2"
    })
    tline.to("img", {
        x: 300,
        duration: 1,
        stagger: 2
    })
    tline.to("#svg2", {
        x: 1000
    })
    tline.to("#svg1", {
        x: 100,
        y: -1000
    })
</script>
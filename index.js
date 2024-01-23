<script>
        let slider=["image/trees-3464777_1280.jpg","image/trees-3294681_1280.jpg","image/snail-2946075_1280.jpg","image/istockphoto-539121576-2048x2048.jpg","image/forest-1258845_1280.jpg"];
        let i=0;
        function demo(){
            let im=document.getElementById("img");
            im.src=slider[i];
            i++;
            if(i==slider.length){
                i=0;
            }
        }
        window.setInterval(demo,2000);
</script>
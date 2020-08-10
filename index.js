var a=document.getElementsByClassName("button");
for(var i=0;i<a.length;i++)
{document.getElementById("Button"+i).addEventListener('click',function(){
    var b=document.getElementById("car").innerText;
    var c=1;
    document.getElementById("car").innerText=eval(Number(b)+Number(c));
        //   <a href="#" class="btn btn-primary button Button<?php echo $i ?>" id="Button<?php echo $i ?>">Add to the Cart</a>
})
}




















<script>
    filterSelection("todos");
        
    function filterSelection(c) 
    {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "todos") c = "";
        for (i = 0; i < x.length; i++) 
        {
            RemoverClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) AgregarClass(x[i], "show");
        }
     }
        
    function AgregarClass(element, name) 
    {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) 
            {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
            }
    }
        
        function RemoverClass(element, name) 
        {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) 
        {
                while (arr1.indexOf(arr2[i]) > -1) 
            {
                arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
        }
        element.className = arr1.join(" ");
    }
        
    var btnContainer = document.getElementById("BtnContainer");
    var btns = btnContainer.getElementsByC
    lassName("btn");
    for (var i = 0; i < btns.length; i++) 
    {
        btns[i].addEventListener("click", function()
        {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
$(function() {

/** DRAG AND DROP STUFF WITH FILE API **/
    var holder = document.getElementById('holder');
    
    holder.ondragover = function() {
        this.className = 'is_hover';
        return false;
    };
    holder.ondragend = function() {
        this.className = '';
        return false;
    };
    holder.ondrop = function(e) {
        this.className = '';
        e.preventDefault();
        
        var file = e.dataTransfer.files[0];
        var reader = new FileReader();
        var newImage = new Image();
        var quality = 10;  
        reader.onload = function(event) {
            var i = document.getElementById("source_image");
            i.src = event.target.result;
            
            i.onload = function(){
               image_width=$(i).width();
                image_height=$(i).height();

                if(image_width > image_height){
                    i.style.width="540px";
                }else{
                    i.style.height="500px";
                }
                i.style.display = "none";
                console.log("Image loaded");    
                
                if(i.size > 4000000) {
                    newImage.src = jic.compress(i, quality, output_format).src;
                    newImage.src = jic.compress(newImage, quality, output_format).src;
                    var callback = function(){ console.log("Filesize:" + (parseInt(newImage.size) / 1024) + " Kb"); }
                    jic.upload(newImage, 'upload.php', 'file', file.name, callback);
                }
                else {
                    newImage.src = jic.compress(i, quality, output_format).src;
                    var callback = function(){ console.log("Filesize:" + (parseInt(newImage.size) / 1024) + " Kb"); }
                    jic.upload(newImage, 'upload.php', 'file', file.name, callback);
                }
            }
        };
        
        if(file.type == "image/png"){
            var output_format = "png";
        }
        
        console.log("Filename:" + file.name);
        console.log("Filesize:" + (parseInt(file.size) / 1024) + " Kb");
        console.log("Type:" + file.type);
        

        reader.readAsDataURL(file);
        
        return false;
    };
    
});
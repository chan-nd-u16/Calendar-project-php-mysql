function encrpt(text,key){
    blank=' '
//    let  key2=arguments[2]   
//     let key3=arguments[3] 
    if(arguments.length==2){
        for(i of text.split('')){
            // console.log(i.charCodeAt(0));
            blank+=String.fromCharCode(i.charCodeAt(0)+key)
            
        }
        console.log(blank)


    }
    else if(arguments.length==3){
        for(i of text.split('')){
            
            
            blank+=String.fromCharCode(i.charCodeAt(0)+key+arguments[2])
            
        }
        console.log(blank)
    }
        
    else if(arguments.length==4){
        for(i of text.split('')){
            blank+=String.fromCharCode(i.charCodeAt(0)+key+arguments[3])
            
        }
        console.log(blank)
        
    }

    
        
        
        


    }



function encription(text,key){
    blank="";
    for(i of text){
        blank+=String.fromCharCode(i.charCodeAt(0)+key);

    }
    console.log(blank);
}
encription('chandru',1);
function decrpt(text,key){

    blank="";
    for(i of text){
        blank+=String.fromCharCode(i.charCodeAt(0)-key);
    }
    console.log(blank);

}
decrpt("diboesv",1);

// Requiring fs module in which
// readFile function is defined.
function verify(){

    const readline = require('readline');
    const fs = require('fs');

    const readInterface = readline.createInterface({
        input: fs.createReadStream('/path/to/file'),
        output: process.stdout,
        console: false
    });
    readInterface.on('line', function(line) {
        console.log(line);
    });

    alert("wait vro");
    // var name=document.getElementById("username");
    // var pass=document.getElementById("password");

    // for(i in textByLine){
    //     var com=text[i].localeCompare(user);
    //     if(com!=-1)
    //     {
    //         flag=1;  
    //         var com2=text[i+2].localeCompare(pass);    
    //         if(com2!=-1)
    //         flag=2;
    //     }
    //     else 
    //     continue;
    // }

   
        
    

}

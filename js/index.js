document.addEventListener('DOMContentLoaded', function() {


    if(document.getElementById('button1') !== null ) {

        var button = document.getElementById('button1');
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            for (let index = 0; index < 5; index++) {
                fetch('https://api.kanye.rest/')
                .then(function(res) {
                    return res.json();
                })
                .then(function(data){ 

                    console.log(data);

                    if(index == 0)
                    {
                        document.getElementById('output1').innerHTML = data.quote;
                    }

                    if(index == 1)
                    {
                        document.getElementById('output2').innerHTML = data.quote;
                    }

                    if(index == 2)
                    {
                        document.getElementById('output3').innerHTML = data.quote;
                    }

                    if(index == 3)
                    {
                        document.getElementById('output4').innerHTML = data.quote;
                    }

                    if(index == 4)
                    {
                        document.getElementById('output5').innerHTML = data.quote;
                    }
                    
                    // let output = '';


                    // data.forEach(function(quote) {
                    //     output += `<li>${quote.quote}</li>`;
                    // });

                    // document.getElementById('output').innerHTML = output;

                    document.getElementById('output').innerHTML = data.quote;

                })
                .catch(function(err){
                    console.log(err);
                }) 
                
            }

            
            // fetch('https://api.kanye.rest/')
            // .then(function(res) {
            //     return res.json();
            // })
            // .then(function(data){ 
            //     console.log(data);

            //     document.getElementById('output').innerHTML = data.quote;
            // })
            // .catch(function(err){
            //     console.log(err);
            // })
        });
    }

    

})
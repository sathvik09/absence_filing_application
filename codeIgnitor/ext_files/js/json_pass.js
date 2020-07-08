   let get_data = (submit,list,url)=>{
    let data_ar = {};
    submit.addEventListener('click',()=>{
        list.forEach(e=>{        
            data_ar[e.name] = e.value;
        })
        console.log(data_ar);
        send_data(url,data_ar)
        .then(res=>res.json())
        .then(ans=>console.log(ans)
        );
    })
    
   }

   
   let send_data = async(url,data)=>{
        await fetch(url, {
          method: 'POST',
          mode: 'cors',
          cache: 'no-cache',    
          headers: {
          'Content-Type': 'application/json',

          },
           body: JSON.stringify(data),
         })
         .then(response => response.json())
         .then(data => {
           return data;
          })
         .catch((error) => {
            console.error('Error:', error);
          });
    }   
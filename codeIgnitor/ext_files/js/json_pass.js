let validate = (list,submit)=>{
     let pattern = /^[a-zA-Z0-9]{5,20}$/;
     let arr = [];
     submit.addEventListener('click',()=>{
      list.forEach((e,i)=>{
        if(!/^[a-zA-Z0-9]$/.test(e.value))
        {
          arr[0]=false;
          arr[1]=`enter a valid ${e.name}`;
          return arr;
        }
        if(!pattern.test(e.value)){
          arr[0] = false;
          arr[1] =`${e.name} should be atleast 5 letters`;
          return false;
        }
     })
     arr[0] = true;
     arr[1] = "accepted";
     return arr;
     })
}

let get_data = (submit,list,url)=>{
    let data_ar = {};
    submit.addEventListener('click',()=>{
        list.forEach(e=>{        
            data_ar[e.name] = e.value;
        })
        console.log(data_ar);
        console.log(send_data(url,data_ar));
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
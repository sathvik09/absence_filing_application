let submit = document.querySelector('.button-sub');
let list = document.querySelectorAll('.data');
let isTrue =true;
console.log(document.querySelector(".dropdown-item").value);

let dropdown = ()=>{
    fetch("http://localhost/absence_filing_application/codeIgnitor/index.php/test/get_list")
    .then((res)=>{return res.json;})
    .then(data=>console.log(data))
}

let man = async(url,data)=>{
    await fetch(url, {
    method: 'POST',
     
    headers: {
    'Content-Type': 'application/json',

    },
     body: JSON.stringify(data),
   })
   .then(response => response.json())
   .then(data => {
     console.log(data);
    })
   .catch((error) => {
      console.error('Error:', error);
    });
}   

man("http://localhost/absence_filing_application/codeIgnitor/index.php/test/get_list",{});
submit.addEventListener('click',()=>{
    list.forEach(e=>{
        if(!/^[a-zA-Z0-9]{5,20}$/.test(e.value)){alert(`${e.name} should be alpha numeric and between 5 to 20 letters`);isTrue=false;}
        if(!/^[0-9]{10,10}$/.test(e.value)&& e.name=="mobile"){alert(`${e.name} should be only numeric and 10 numbers`);isTrue=false;}
    })
    if(isTrue)get_data(submit,list,"http://localhost/absence_filing_application/codeIgnitor/index.php/test/add_detail");
    list.forEach(e=>e.value="");
    isTrue=true;
})

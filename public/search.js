let search2 = document.querySelector("#searchstudent");
let table = document.querySelector('#contentStudent');

search2.addEventListener("keyup", async() => {
    let res = await axios.get(`http://127.0.0.1:8000/searchstudent/${search2.value}`) ;
    let Data = res.data;
    if (Data.length > 0) {
        table.innerHTML = "";
    
        console.log(Data)

    
    for(var i = 0; i < Data.length; i++){
        table.innerHTML += `<tr>
            <td>${Data[i]['first_name']}</td>
            <td>${Data[i]['last_name']}</td>
            <td>${Data[i]['email']}</td>


            <td>
            <a href='Edit?id=/${Data[i]["id"]}'>Edit</a>
            <a href='Delete?id=/${Data[i]["id"]}'> Delete</a>
            </td>
        </tr>
        `;
    }
    }
});




 //product js
 
 let listProductHTML = document.querySelector('.listProduct');
 
 let listProducts = [];

function iconCart(){
    document.getElementById("cartTab").style.display="block";
}

function closebtn(){
    document.getElementById("cartTab").style.display="none";
}


const addDataToHTML = () => {
    listProductHTML.innerHTML = '';
    if(listProducts.length>0){
      listProducts.forEach(product => {
        let newProduct = document.createElement('div');
        newProduct.classList.add('item');
        newProduct.innerHTML = `
          <img src="${product.image}" alt="">
          <h2>${product.name}</h2>
          <div class="price">${product.price}</div>
          <p>${product.description || "Information of Products"}</p>  <button class="addCart">
            Add To Cart
          </button>`;
        listProductHTML.appendChild(newProduct);
      })
    }
  }
  

const initApp = () => {
    fetch('products.json')
    then(response => response.json())
    then(data => {
        listProducts = data;
        addDataToHTML();

    })
}
initApp();
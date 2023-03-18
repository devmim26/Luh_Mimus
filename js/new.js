
let carts=document.querySelectorAll('.add-cart');
let products=[
{
    name:'Brigadeiro',
    tag:'brigadeiro',
    price:95,
    inCart:0

},
{
    name:'Beijinho',
    tag:'beijinho',
    price:95,
    inCart:0

},
{
    name:'Dois Amores',
    tag:'doisamores',
    price:95,
    inCart:0

},
{
    name:'Lowers T-Shirt',
    tag:'Lowersshirt',
    price:25,
    inCart:0

}
]
for(let i=0;i<carts.length;i++){
    carts[i].addEventListener('click',()=>{
        cartNumbers(products[i]);
        totalCost(products[i])
    });

}
function cartNumbers(product){
    
    
    let productNumbers=localStorage.getItem('cartNumbers');
    productNumbers=parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem('cartNumbers',productNumbers+1)
        document.querySelector('.nav-item span').textContent=productNumbers+1;
    }
    else{
        localStorage.setItem('cartNumbers',1);
        document.querySelector('.nav-item span').textContent=1;
    }

    setItems(product);
     
}

function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    console.log("My cartItems are", cartItems);

    if(cartItems != null){
        if  (cartItems[product.tag] == undefined){
cartItems = { 
    ...cartItems,
    [product.tag]: product
}
        }
    
        cartItems[product.tag].inCart += 1;

    }
    
else {
    product.inCart = 1;

 cartItems = {
    [product.tag] : product}

}

localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

//function totalCost(product){
    //console.log("The product price is" , product.price);
    //let cartCost = localStorage.getItem('totalCost');
   
    //console.log("My cartCost is" , cartCost);
    //if (cartCost != null){
        //cartCost = parseInt(cartCost);
        //localStorage.setItem("totalCost", cartCost + product.price)

    //} //else{
        //localStorage.setItem("totalCost" , product.price);
    //}

  

//}

function onLoadCartNumbers(){
    let productNumbers=localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.nav-item span').textContent=productNumbers;
    }
}

function displayCart(){
let cartItems = localStorage.getItem("productsInCart");
cartItems = JSON.parse(cartItems);

let productContainer = document.querySelector(".products");
console.log(cartItems);
let cartCost = localStorage.getItem('totalCost');
if(cartItems && productContainer ){
   productContainer.innerHTML = '';
   Object.values(cartItems).map(item =>{
    productContainer.innerHTML += `
    <div class "product-inside"> 
    <div class="product">
    
    <img src="../images/produtos/${item.tag}.png">
    <br>
    <span>${item.name}</span>
    </div>
    <div class="price">R$ ${item.price},00</div>
    </div>
    
   
    `;

   });

  

   


}

}




onLoadCartNumbers();
displayCart();//